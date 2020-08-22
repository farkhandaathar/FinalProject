<?php

namespace app\modules\Announcements\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\Announcements\models\Emails;

/**
 * EmailsSearch represents the model behind the search form of `app\modules\Announcements\models\Emails`.
 */
class EmailsSearch extends Emails
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['email_id'], 'integer'],
            [['from', 'to', 'subject', 'text_body'], 'safe'],
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
        $query = Emails::find();

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
            'email_id' => $this->email_id,
        ]);

        $query->andFilterWhere(['like', 'from', $this->from])
            ->andFilterWhere(['like', 'to', $this->to])
            ->andFilterWhere(['like', 'subject', $this->subject])
            ->andFilterWhere(['like', 'text_body', $this->text_body]);

        return $dataProvider;
    }
}
