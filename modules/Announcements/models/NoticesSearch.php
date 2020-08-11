<?php

namespace app\modules\Announcements\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\Announcements\models\Notices;

/**
 * NoticesSearch represents the model behind the search form of `app\modules\Announcements\models\Notices`.
 */
class NoticesSearch extends Notices
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['notice_id', 'is_status'], 'integer'],
            [['notice_title', 'notice_description', 'notice_user_type', 'notice_date', 'notice_file_path', 'created_at'], 'safe'],
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
        $query = Notices::find();

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
            'notice_id' => $this->notice_id,
            'notice_date' => $this->notice_date,
            'created_at' => $this->created_at,
            'is_status' => $this->is_status,
        ]);

        $query->andFilterWhere(['like', 'notice_title', $this->notice_title])
            ->andFilterWhere(['like', 'notice_description', $this->notice_description])
            ->andFilterWhere(['like', 'notice_user_type', $this->notice_user_type])
            ->andFilterWhere(['like', 'notice_file_path', $this->notice_file_path]);

        return $dataProvider;
    }
}
