<?php

namespace app\modules\Courses\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\Courses\models\Semesters;

/**
 * SemestersSearch represents the model behind the search form of `app\modules\Courses\models\Semesters`.
 */
class SemestersSearch extends Semesters
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['semester_id', 'is_status'], 'integer'],
            [['semester_name', 'created_at'], 'safe'],
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
        $query = Semesters::find();

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
            'semester_id' => $this->semester_id,
            'created_at' => $this->created_at,
            'is_status' => $this->is_status,
        ]);

        $query->andFilterWhere(['like', 'semester_name', $this->semester_name]);

        return $dataProvider;
    }
}
