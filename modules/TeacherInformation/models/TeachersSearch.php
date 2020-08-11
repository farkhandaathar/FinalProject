<?php

namespace app\modules\TeacherInformation\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\TeacherInformation\models\Teachers;

/**
 * TeachersSearch represents the model behind the search form of `app\modules\TeacherInformation\models\Teachers`.
 */
class TeachersSearch extends Teachers
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['teacher_id', 'teacher_phone_no_1', 'teacher_phone_no_2', 'teacher_country_id', 'teacher_province_id', 'teacher_city_id', 'teacher_city_zip_code', 'teacher_department_id', 'teacher_designation_id', 'teacher_category_id', 'teacher_course_id', 'teacher_batch_id', 'teacher_section_id'], 'integer'],
            [['teacher_first_name', 'teacher_middle_name', 'teacher_last_name', 'father_first_name', 'father_middle_name', 'father_last_name', 'teacher_cnic', 'teacher_gender', 'teacher_dob', 'teacher_email', 'teacher_address_line_1', 'teacher_address_line_2', 'company_name_1', 'post_name_1', 'start_date_1', 'end_date_1', 'company_name_2', 'post_name_2', 'start_date_2', 'end_date_2', 'teacher_joining_date', 'teacher_experience'], 'safe'],
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
        $query = Teachers::find();

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
            'teacher_id' => $this->teacher_id,
            'teacher_dob' => $this->teacher_dob,
            'teacher_phone_no_1' => $this->teacher_phone_no_1,
            'teacher_phone_no_2' => $this->teacher_phone_no_2,
            'teacher_country_id' => $this->teacher_country_id,
            'teacher_province_id' => $this->teacher_province_id,
            'teacher_city_id' => $this->teacher_city_id,
            'teacher_city_zip_code' => $this->teacher_city_zip_code,
            'start_date_1' => $this->start_date_1,
            'end_date_1' => $this->end_date_1,
            'start_date_2' => $this->start_date_2,
            'end_date_2' => $this->end_date_2,
            'teacher_joining_date' => $this->teacher_joining_date,
            'teacher_department_id' => $this->teacher_department_id,
            'teacher_designation_id' => $this->teacher_designation_id,
            'teacher_category_id' => $this->teacher_category_id,
            'teacher_course_id' => $this->teacher_course_id,
            'teacher_batch_id' => $this->teacher_batch_id,
            'teacher_section_id' => $this->teacher_section_id,
        ]);

        $query->andFilterWhere(['like', 'teacher_first_name', $this->teacher_first_name])
            ->andFilterWhere(['like', 'teacher_middle_name', $this->teacher_middle_name])
            ->andFilterWhere(['like', 'teacher_last_name', $this->teacher_last_name])
            ->andFilterWhere(['like', 'father_first_name', $this->father_first_name])
            ->andFilterWhere(['like', 'father_middle_name', $this->father_middle_name])
            ->andFilterWhere(['like', 'father_last_name', $this->father_last_name])
            ->andFilterWhere(['like', 'teacher_cnic', $this->teacher_cnic])
            ->andFilterWhere(['like', 'teacher_gender', $this->teacher_gender])
            ->andFilterWhere(['like', 'teacher_email', $this->teacher_email])
            ->andFilterWhere(['like', 'teacher_address_line_1', $this->teacher_address_line_1])
            ->andFilterWhere(['like', 'teacher_address_line_2', $this->teacher_address_line_2])
            ->andFilterWhere(['like', 'company_name_1', $this->company_name_1])
            ->andFilterWhere(['like', 'post_name_1', $this->post_name_1])
            ->andFilterWhere(['like', 'company_name_2', $this->company_name_2])
            ->andFilterWhere(['like', 'post_name_2', $this->post_name_2])
            ->andFilterWhere(['like', 'teacher_experience', $this->teacher_experience]);

        return $dataProvider;
    }
}
