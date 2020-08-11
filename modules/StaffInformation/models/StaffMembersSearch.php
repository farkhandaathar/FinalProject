<?php

namespace app\modules\StaffInformation\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\StaffInformation\models\StaffMembers;

/**
 * StaffMembersSearch represents the model behind the search form of `app\modules\StaffInformation\models\StaffMembers`.
 */
class StaffMembersSearch extends StaffMembers
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['member_id', 'member_cnic', 'member_phone_no_1', 'member_phone_no_2', 'member_country_id', 'member_province_id', 'member_city_id', 'member_city_zip_code', 'member_department_id', 'member_designation_id', 'member_category_id'], 'integer'],
            [['member_first_name', 'member_middle_name', 'member_last_name', 'father_first_name', 'father_middle_name', 'father_last_name', 'member_gender', 'member_dob', 'member_email', 'member_address_line_1', 'member_address_line_2', 'company_name_1', 'post_name_1', 'start_date_1', 'end_date_1', 'compnay_name_2', 'post_name_2', 'start_date_2', 'end_date_2', 'member_joining_date', 'member_experience'], 'safe'],
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
        $query = StaffMembers::find();

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
            'member_id' => $this->member_id,
            'member_cnic' => $this->member_cnic,
            'member_dob' => $this->member_dob,
            'member_phone_no_1' => $this->member_phone_no_1,
            'member_phone_no_2' => $this->member_phone_no_2,
            'member_country_id' => $this->member_country_id,
            'member_province_id' => $this->member_province_id,
            'member_city_id' => $this->member_city_id,
            'member_city_zip_code' => $this->member_city_zip_code,
            'start_date_1' => $this->start_date_1,
            'end_date_1' => $this->end_date_1,
            'start_date_2' => $this->start_date_2,
            'end_date_2' => $this->end_date_2,
            'member_joining_date' => $this->member_joining_date,
            'member_department_id' => $this->member_department_id,
            'member_designation_id' => $this->member_designation_id,
            'member_category_id' => $this->member_category_id,
        ]);

        $query->andFilterWhere(['like', 'member_first_name', $this->member_first_name])
            ->andFilterWhere(['like', 'member_middle_name', $this->member_middle_name])
            ->andFilterWhere(['like', 'member_last_name', $this->member_last_name])
            ->andFilterWhere(['like', 'father_first_name', $this->father_first_name])
            ->andFilterWhere(['like', 'father_middle_name', $this->father_middle_name])
            ->andFilterWhere(['like', 'father_last_name', $this->father_last_name])
            ->andFilterWhere(['like', 'member_gender', $this->member_gender])
            ->andFilterWhere(['like', 'member_email', $this->member_email])
            ->andFilterWhere(['like', 'member_address_line_1', $this->member_address_line_1])
            ->andFilterWhere(['like', 'member_address_line_2', $this->member_address_line_2])
            ->andFilterWhere(['like', 'company_name_1', $this->company_name_1])
            ->andFilterWhere(['like', 'post_name_1', $this->post_name_1])
            ->andFilterWhere(['like', 'compnay_name_2', $this->compnay_name_2])
            ->andFilterWhere(['like', 'post_name_2', $this->post_name_2])
            ->andFilterWhere(['like', 'member_experience', $this->member_experience]);

        return $dataProvider;
    }
}
