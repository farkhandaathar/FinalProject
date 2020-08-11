<?php

namespace app\modules\StaffInformation\models;

use Yii;
use app\modules\configuration\models\Country;
use app\modules\configuration\models\Province;
use app\modules\configuration\models\City;
use app\modules\configuration\models\Designation;
use app\modules\configuration\models\Category;
use app\modules\configuration\models\Department;
use app\modules\Courses\models\PreviousDegrees;
use app\models\User;

/**
 * This is the model class for table "staff_members".
 *
 * @property int $member_id
 * @property string $member_first_name
 * @property string $member_middle_name
 * @property string $member_last_name
 * @property string $father_first_name
 * @property string $father_middle_name
 * @property string $father_last_name
 * @property int $member_cnic
 * @property string $member_gender
 * @property string $member_dob
 * @property string $member_email
 * @property int $member_phone_no_1
 * @property int $member_phone_no_2
 * @property string $member_address_line_1
 * @property string $member_address_line_2
 * @property int $member_country_id
 * @property int $member_province_id
 * @property int $member_city_id
 * @property int $member_city_zip_code
 * @property string $company_name_1
 * @property string $post_name_1
 * @property string $start_date_1
 * @property string $end_date_1
 * @property string $compnay_name_2
 * @property string $post_name_2
 * @property string $start_date_2
 * @property string $end_date_2
 * @property string $member_joining_date
 * @property int $member_department_id
 * @property int $member_designation_id
 * @property int $member_category_id
 * @property string $member_experience
 *
 * @property Country $memberCountry
 * @property Province $memberProvince
 * @property City $memberCity
 * @property Department $memberDepartment
 * @property Designation $memberDesignation
 * @property Category $memberCategory
 */
class StaffMembers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'staff_members';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['member_first_name', 'member_middle_name', 'member_last_name', 'father_first_name', 'father_middle_name', 'father_last_name', 'member_cnic', 'member_gender', 'member_dob', 'member_email', 'member_phone_no_1', 'member_phone_no_2', 'member_address_line_1', 'member_address_line_2', 'member_country_id', 'member_province_id', 'member_city_id', 'member_city_zip_code', 'company_name_1', 'post_name_1', 'start_date_1', 'end_date_1', 'compnay_name_2', 'post_name_2', 'start_date_2', 'end_date_2', 'member_joining_date', 'member_department_id', 'member_designation_id', 'member_category_id', 'member_experience'], 'required'],
            [['member_cnic', 'member_phone_no_1', 'member_phone_no_2', 'member_country_id', 'member_province_id', 'member_city_id', 'member_city_zip_code', 'member_department_id', 'member_designation_id', 'member_category_id'], 'integer'],
            [['member_dob', 'start_date_1', 'end_date_1', 'start_date_2', 'end_date_2', 'member_joining_date'], 'safe'],
            [['member_first_name', 'member_middle_name', 'member_last_name', 'father_first_name', 'father_middle_name', 'father_last_name', 'company_name_1', 'post_name_1', 'compnay_name_2', 'post_name_2'], 'string', 'max' => 50],
            [['member_gender', 'member_experience'], 'string', 'max' => 20],
            [['member_email'], 'string', 'max' => 65],
            [['member_address_line_1', 'member_address_line_2'], 'string', 'max' => 255],
            [['member_country_id'], 'exist', 'skipOnError' => true, 'targetClass' => Country::className(), 'targetAttribute' => ['member_country_id' => 'country_id']],
            [['member_province_id'], 'exist', 'skipOnError' => true, 'targetClass' => Province::className(), 'targetAttribute' => ['member_province_id' => 'province_id']],
            [['member_city_id'], 'exist', 'skipOnError' => true, 'targetClass' => City::className(), 'targetAttribute' => ['member_city_id' => 'city_id']],
            [['member_department_id'], 'exist', 'skipOnError' => true, 'targetClass' => Department::className(), 'targetAttribute' => ['member_department_id' => 'department_id']],
            [['member_designation_id'], 'exist', 'skipOnError' => true, 'targetClass' => Designation::className(), 'targetAttribute' => ['member_designation_id' => 'designation_id']],
            [['member_category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['member_category_id' => 'category_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'member_id' => 'Member ID',
            'member_first_name' => 'Member First Name',
            'member_middle_name' => 'Member Middle Name',
            'member_last_name' => 'Member Last Name',
            'father_first_name' => 'Father First Name',
            'father_middle_name' => 'Father Middle Name',
            'father_last_name' => 'Father Last Name',
            'member_cnic' => 'Member Cnic',
            'member_gender' => 'Member Gender',
            'member_dob' => 'Member Dob',
            'member_email' => 'Member Email',
            'member_phone_no_1' => 'Member Phone No 1',
            'member_phone_no_2' => 'Member Phone No 2',
            'member_address_line_1' => 'Member Address Line 1',
            'member_address_line_2' => 'Member Address Line 2',
            'member_country_id' => 'Member Country ID',
            'member_province_id' => 'Member Province ID',
            'member_city_id' => 'Member City ID',
            'member_city_zip_code' => 'Member City Zip Code',
            'company_name_1' => 'Company Name 1',
            'post_name_1' => 'Post Name 1',
            'start_date_1' => 'Start Date 1',
            'end_date_1' => 'End Date 1',
            'compnay_name_2' => 'Compnay Name 2',
            'post_name_2' => 'Post Name 2',
            'start_date_2' => 'Start Date 2',
            'end_date_2' => 'End Date 2',
            'member_joining_date' => 'Member Joining Date',
            'member_department_id' => 'Member Department ID',
            'member_designation_id' => 'Member Designation ID',
            'member_category_id' => 'Member Category ID',
            'member_experience' => 'Member Experience',
        ];
    }

    /**
     * Gets query for [[MemberCountry]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMemberCountry()
    {
        return $this->hasOne(Country::className(), ['country_id' => 'member_country_id']);
    }

    /**
     * Gets query for [[MemberProvince]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMemberProvince()
    {
        return $this->hasOne(Province::className(), ['province_id' => 'member_province_id']);
    }

    /**
     * Gets query for [[MemberCity]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMemberCity()
    {
        return $this->hasOne(City::className(), ['city_id' => 'member_city_id']);
    }

    /**
     * Gets query for [[MemberDepartment]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMemberDepartment()
    {
        return $this->hasOne(Department::className(), ['department_id' => 'member_department_id']);
    }

    /**
     * Gets query for [[MemberDesignation]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMemberDesignation()
    {
        return $this->hasOne(Designation::className(), ['designation_id' => 'member_designation_id']);
    }

    /**
     * Gets query for [[MemberCategory]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMemberCategory()
    {
        return $this->hasOne(Category::className(), ['category_id' => 'member_category_id']);
    }
}
