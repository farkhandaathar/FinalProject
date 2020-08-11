<?php

namespace app\modules\Announcements\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\Announcements\models\Events;

/**
 * EventsSearch represents the model behind the search form of `app\modules\Announcements\models\Events`.
 */
class EventsSearch extends Events
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['event_id', 'is_status'], 'integer'],
            [['event_title', 'event_description', 'event_user_type', 'created_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Events::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'event_id' => $this->event_id,
            'created_at' => $this->created_at,
            'is_status' => $this->is_status,
        ]);

        $query->andFilterWhere(['like', 'event_title', $this->event_title])
            ->andFilterWhere(['like', 'event_description', $this->event_description])
            ->andFilterWhere(['like', 'event_user_type', $this->event_user_type]);

        return $dataProvider;
    }
}
