<?php

namespace app\modules\StudentInformation\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\StudentInformation\models\SecondSemester;

/**
 * SecondSemesterSearch represents the model behind the search form of `app\modules\StudentInformation\models\SecondSemester`.
 */
class SecondSemesterSearch extends SecondSemester
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['student_id', 'department', 'semester', 'batch', 'section', 'is_status'], 'integer'],
            [['student_roll_no', 'student_registration_no', 'student_name', 'father_name'], 'safe'],
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
        $query = SecondSemester::find();

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
            'student_id' => $this->student_id,
            'department' => $this->department,
            'semester' => $this->semester,
            'batch' => $this->batch,
            'section' => $this->section,
            'is_status' => $this->is_status,
        ]);

        $query->andFilterWhere(['like', 'student_roll_no', $this->student_roll_no])
            ->andFilterWhere(['like', 'student_registration_no', $this->student_registration_no])
            ->andFilterWhere(['like', 'student_name', $this->student_name])
            ->andFilterWhere(['like', 'father_name', $this->father_name]);

        return $dataProvider;
    }
}
