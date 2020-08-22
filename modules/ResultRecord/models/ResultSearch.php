<?php

namespace app\modules\ResultRecord\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\ResultRecord\models\Result;

/**
 * ResultSearch represents the model behind the search form of `app\modules\ResultRecord\models\Result`.
 */
class ResultSearch extends Result
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['student_id', 'subject1', 'subjec1_obtain_marks', 'subject1_total_marks', 'subject2', 'subject2_obtain_marks', 'subject2_total_marks', 'subject3', 'subject3_obtain_marks', 'subject3_total_marks', 'subject4', 'subject4_obtain_marks', 'subject4_total_marks', 'subject5', 'subject5_obtain_marks', 'subject5_total_marks', 'subject6', 'subject6_obtain_marks', 'subject6_total_marks'], 'integer'],
            [['roll_no', 'registration_no', 'student_name', 'father_name', 'department', 'semester', 'section'], 'safe'],
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
        $query = Result::find();

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
            'subject1' => $this->subject1,
            'subjec1_obtain_marks' => $this->subjec1_obtain_marks,
            'subject1_total_marks' => $this->subject1_total_marks,
            'subject2' => $this->subject2,
            'subject2_obtain_marks' => $this->subject2_obtain_marks,
            'subject2_total_marks' => $this->subject2_total_marks,
            'subject3' => $this->subject3,
            'subject3_obtain_marks' => $this->subject3_obtain_marks,
            'subject3_total_marks' => $this->subject3_total_marks,
            'subject4' => $this->subject4,
            'subject4_obtain_marks' => $this->subject4_obtain_marks,
            'subject4_total_marks' => $this->subject4_total_marks,
            'subject5' => $this->subject5,
            'subject5_obtain_marks' => $this->subject5_obtain_marks,
            'subject5_total_marks' => $this->subject5_total_marks,
            'subject6' => $this->subject6,
            'subject6_obtain_marks' => $this->subject6_obtain_marks,
            'subject6_total_marks' => $this->subject6_total_marks,
        ]);

        $query->andFilterWhere(['like', 'roll_no', $this->roll_no])
            ->andFilterWhere(['like', 'registration_no', $this->registration_no])
            ->andFilterWhere(['like', 'student_name', $this->student_name])
            ->andFilterWhere(['like', 'father_name', $this->father_name])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'semester', $this->semester])
            ->andFilterWhere(['like', 'section', $this->section]);

        return $dataProvider;
    }
}
