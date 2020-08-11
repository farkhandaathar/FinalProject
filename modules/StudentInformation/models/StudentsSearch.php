<?php

namespace app\modules\StudentInformation\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\StudentInformation\models\Students;

/**
 * StudentsSearch represents the model behind the search form of `app\modules\StudentInformation\models\Students`.
 */
class StudentsSearch extends Students
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['student_id', 'student_phone_no_1', 'student_phone_no_2', 'guardian_phone_no_1', 'guardian_phone_no_2', 'premanent_city_zip_code', 'permanent_country_id', 'permanent_province_id', 'permanent_city_id', 'temporary_country_id', 'temporary_province_id', 'temporary_city_id', 'temporary_city_zip_code', 'degree', 'batch', 'section', 'previous_degree_1', 'matric_marks_obtained', 'matric_marks_total', 'previous_degree_2', 'inter_marks_obtain', 'inter_marks_total'], 'integer'],
            [['student_rollno', 'student_registration', 'student_first_name', 'student_middle_name', 'student_last_name', 'father_first_name', 'father_middle_name', 'father_last_name', 'student_cnic', 'student_gender', 'student_dob', 'student_email', 'guardian_first_name', 'guardian_middle_name', 'guardian_last_name', 'guardian_cnic', 'guardian_relation', 'guardian_email', 'student_permanent_address_1', 'student_permanent_address_2', 'student_temporary_address_1', 'student_temporary_address_2', 'degree_start_date', 'degree_end_date', 'student_status', 'matric_degree_start_date', 'matric_degree_end_date', 'matric_marks_percentage', 'inter_degree_start_date', 'inter_degree_end_date', 'inter_marks_percentage'], 'safe'],
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
        $query = Students::find();

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
            'student_dob' => $this->student_dob,
            'student_phone_no_1' => $this->student_phone_no_1,
            'student_phone_no_2' => $this->student_phone_no_2,
            'guardian_phone_no_1' => $this->guardian_phone_no_1,
            'guardian_phone_no_2' => $this->guardian_phone_no_2,
            'premanent_city_zip_code' => $this->premanent_city_zip_code,
            'permanent_country_id' => $this->permanent_country_id,
            'permanent_province_id' => $this->permanent_province_id,
            'permanent_city_id' => $this->permanent_city_id,
            'temporary_country_id' => $this->temporary_country_id,
            'temporary_province_id' => $this->temporary_province_id,
            'temporary_city_id' => $this->temporary_city_id,
            'temporary_city_zip_code' => $this->temporary_city_zip_code,
            'degree' => $this->degree,
            'batch' => $this->batch,
            'section' => $this->section,
            'degree_start_date' => $this->degree_start_date,
            'degree_end_date' => $this->degree_end_date,
            'previous_degree_1' => $this->previous_degree_1,
            'matric_degree_start_date' => $this->matric_degree_start_date,
            'matric_degree_end_date' => $this->matric_degree_end_date,
            'matric_marks_obtained' => $this->matric_marks_obtained,
            'matric_marks_total' => $this->matric_marks_total,
            'previous_degree_2' => $this->previous_degree_2,
            'inter_degree_start_date' => $this->inter_degree_start_date,
            'inter_degree_end_date' => $this->inter_degree_end_date,
            'inter_marks_obtain' => $this->inter_marks_obtain,
            'inter_marks_total' => $this->inter_marks_total,
        ]);

        $query->andFilterWhere(['like', 'student_rollno', $this->student_rollno])
            ->andFilterWhere(['like', 'student_registration', $this->student_registration])
            ->andFilterWhere(['like', 'student_first_name', $this->student_first_name])
            ->andFilterWhere(['like', 'student_middle_name', $this->student_middle_name])
            ->andFilterWhere(['like', 'student_last_name', $this->student_last_name])
            ->andFilterWhere(['like', 'father_first_name', $this->father_first_name])
            ->andFilterWhere(['like', 'father_middle_name', $this->father_middle_name])
            ->andFilterWhere(['like', 'father_last_name', $this->father_last_name])
            ->andFilterWhere(['like', 'student_cnic', $this->student_cnic])
            ->andFilterWhere(['like', 'student_gender', $this->student_gender])
            ->andFilterWhere(['like', 'student_email', $this->student_email])
            ->andFilterWhere(['like', 'guardian_first_name', $this->guardian_first_name])
            ->andFilterWhere(['like', 'guardian_middle_name', $this->guardian_middle_name])
            ->andFilterWhere(['like', 'guardian_last_name', $this->guardian_last_name])
            ->andFilterWhere(['like', 'guardian_cnic', $this->guardian_cnic])
            ->andFilterWhere(['like', 'guardian_relation', $this->guardian_relation])
            ->andFilterWhere(['like', 'guardian_email', $this->guardian_email])
            ->andFilterWhere(['like', 'student_permanent_address_1', $this->student_permanent_address_1])
            ->andFilterWhere(['like', 'student_permanent_address_2', $this->student_permanent_address_2])
            ->andFilterWhere(['like', 'student_temporary_address_1', $this->student_temporary_address_1])
            ->andFilterWhere(['like', 'student_temporary_address_2', $this->student_temporary_address_2])
            ->andFilterWhere(['like', 'student_status', $this->student_status])
            ->andFilterWhere(['like', 'matric_marks_percentage', $this->matric_marks_percentage])
            ->andFilterWhere(['like', 'inter_marks_percentage', $this->inter_marks_percentage]);

        return $dataProvider;
    }
}
