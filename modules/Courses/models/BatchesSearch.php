<?php

namespace app\modules\Courses\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\Courses\models\Batches;

/**
 * BatchesSearch represents the model behind the search form of `app\modules\courses\models\Batches`.
 */
class BatchesSearch extends Batches
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['batch_id', 'created_by', 'is_status'], 'integer'],
            [['batch_name', 'batch_alias', 'start_date', 'end_date', 'created_at'], 'safe'],
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
        $query = Batches::find();

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
            'batch_id' => $this->batch_id,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'created_at' => $this->created_at,
            'created_by' => $this->created_by,
            'is_status' => $this->is_status,
        ]);

        $query->andFilterWhere(['like', 'batch_name', $this->batch_name])
            ->andFilterWhere(['like', 'batch_alias', $this->batch_alias]);

        return $dataProvider;
    }
}
