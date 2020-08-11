<?php

namespace app\modules\Courses\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\Courses\models\PreviousDegrees;

/**
 * PreviousDegreesSearch represents the model behind the search form of `app\modules\Courses\models\PreviousDegrees`.
 */
class PreviousDegreesSearch extends PreviousDegrees
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['degree_id', 'created_by'], 'integer'],
            [['degree_name', 'degree_duration', 'created_at'], 'safe'],
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
        $query = PreviousDegrees::find();

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
            'degree_id' => $this->degree_id,
            'created_at' => $this->created_at,
            'created_by' => $this->created_by,
        ]);

        $query->andFilterWhere(['like', 'degree_name', $this->degree_name])
            ->andFilterWhere(['like', 'degree_duration', $this->degree_duration]);

        return $dataProvider;
    }
}
