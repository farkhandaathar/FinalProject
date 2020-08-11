<?php

namespace app\modules\StaffInformation\models;

use Yii;

/**
 * This is the model class for table "teachers".
 *
 * @property int $teacher_id
 * @property string $teacher_first_name
 * @property string $teacher_middle_name
 * @property string $teacher_last_name
 * @property string $father_first_name
 * @property string $father_middle_name
 * @property string $father_last_name
 * @property string $teacher_cnic
 * @property string $teacher_gender
 * @property string $teacher_dob
 * @property string $teacher_email
 * @property int $teacher_phone_no_1
 * @property int $teacher_phone_no_2
 * @property string $teacher_address_line_1
 * @property string $teacher_address_line_2
 * @property int $teacher_country_id
 * @property int $teacher_province_id
 * @property int $teacher_city_id
 * @property int $teacher_city_zip_code
 * @property string $company_name_1
 * @property string $post_name_1
 * @property string $start_date_1
 * @property string $end_date_1
 * @property string $company_name_2
 * @property string $post_name_2
 * @property string $start_date_2
 * @property string $end_date_2
 * @property string $teacher_joining_date
 * @property int $teacher_department_id
 * @property int $teacher_designation_id
 * @property int $teacher_category_id
 * @property string $teacher_experience
 * @property int $teacher_course_id
 * @property int $teacher_batch_id
 * @property int $teacher_section_id
 *
 * @property Country $teacherCountry
 * @property Province $teacherProvince
 * @property City $teacherCity
 * @property Department $teacherDepartment
 * @property Designation $teacherDesignation
 * @property Category $teacherCategory
 * @property Courses $teacherCourse
 * @property Batches $teacherBatch
 * @property Section $teacherSection
 */
class Teachers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'teachers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['teacher_id', 'teacher_first_name', 'teacher_middle_name', 'teacher_last_name', 'father_first_name', 'father_middle_name', 'father_last_name', 'teacher_cnic', 'teacher_gender', 'teacher_dob', 'teacher_email', 'teacher_phone_no_1', 'teacher_phone_no_2', 'teacher_address_line_1', 'teacher_address_line_2', 'teacher_country_id', 'teacher_province_id', 'teacher_city_id', 'teacher_city_zip_code', 'company_name_1', 'post_name_1', 'start_date_1', 'end_date_1', 'company_name_2', 'post_name_2', 'start_date_2', 'end_date_2', 'teacher_joining_date', 'teacher_department_id', 'teacher_designation_id', 'teacher_category_id', 'teacher_experience', 'teacher_course_id', 'teacher_batch_id', 'teacher_section_id'], 'required'],
            [['teacher_id', 'teacher_phone_no_1', 'teacher_phone_no_2', 'teacher_country_id', 'teacher_province_id', 'teacher_city_id', 'teacher_city_zip_code', 'teacher_department_id', 'teacher_designation_id', 'teacher_category_id', 'teacher_course_id', 'teacher_batch_id', 'teacher_section_id'], 'integer'],
            [['teacher_dob', 'start_date_1', 'end_date_1', 'start_date_2', 'end_date_2', 'teacher_joining_date'], 'safe'],
            [['teacher_first_name', 'teacher_middle_name', 'teacher_last_name', 'father_first_name', 'father_middle_name', 'father_last_name', 'company_name_1', 'post_name_1', 'company_name_2', 'post_name_2'], 'string', 'max' => 50],
            [['teacher_cnic', 'teacher_gender', 'teacher_experience'], 'string', 'max' => 20],
            [['teacher_email'], 'string', 'max' => 65],
            [['teacher_address_line_1', 'teacher_address_line_2'], 'string', 'max' => 255],
            [['teacher_id'], 'unique'],
            [['teacher_country_id'], 'exist', 'skipOnError' => true, 'targetClass' => Country::className(), 'targetAttribute' => ['teacher_country_id' => 'country_id']],
            [['teacher_province_id'], 'exist', 'skipOnError' => true, 'targetClass' => Province::className(), 'targetAttribute' => ['teacher_province_id' => 'province_id']],
            [['teacher_city_id'], 'exist', 'skipOnError' => true, 'targetClass' => City::className(), 'targetAttribute' => ['teacher_city_id' => 'city_id']],
            [['teacher_department_id'], 'exist', 'skipOnError' => true, 'targetClass' => Department::className(), 'targetAttribute' => ['teacher_department_id' => 'department_id']],
            [['teacher_designation_id'], 'exist', 'skipOnError' => true, 'targetClass' => Designation::className(), 'targetAttribute' => ['teacher_designation_id' => 'designation_id']],
            [['teacher_category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['teacher_category_id' => 'category_id']],
            [['teacher_course_id'], 'exist', 'skipOnError' => true, 'targetClass' => Courses::className(), 'targetAttribute' => ['teacher_course_id' => 'course_id']],
            [['teacher_batch_id'], 'exist', 'skipOnError' => true, 'targetClass' => Batches::className(), 'targetAttribute' => ['teacher_batch_id' => 'batch_id']],
            [['teacher_section_id'], 'exist', 'skipOnError' => true, 'targetClass' => Section::className(), 'targetAttribute' => ['teacher_section_id' => 'section_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'teacher_id' => 'Teacher ID',
            'teacher_first_name' => 'Teacher First Name',
            'teacher_middle_name' => 'Teacher Middle Name',
            'teacher_last_name' => 'Teacher Last Name',
            'father_first_name' => 'Father First Name',
            'father_middle_name' => 'Father Middle Name',
            'father_last_name' => 'Father Last Name',
            'teacher_cnic' => 'Teacher Cnic',
            'teacher_gender' => 'Teacher Gender',
            'teacher_dob' => 'Teacher Dob',
            'teacher_email' => 'Teacher Email',
            'teacher_phone_no_1' => 'Teacher Phone No 1',
            'teacher_phone_no_2' => 'Teacher Phone No 2',
            'teacher_address_line_1' => 'Teacher Address Line 1',
            'teacher_address_line_2' => 'Teacher Address Line 2',
            'teacher_country_id' => 'Teacher Country ID',
            'teacher_province_id' => 'Teacher Province ID',
            'teacher_city_id' => 'Teacher City ID',
            'teacher_city_zip_code' => 'Teacher City Zip Code',
            'company_name_1' => 'Company Name 1',
            'post_name_1' => 'Post Name 1',
            'start_date_1' => 'Start Date 1',
            'end_date_1' => 'End Date 1',
            'company_name_2' => 'Company Name 2',
            'post_name_2' => 'Post Name 2',
            'start_date_2' => 'Start Date 2',
            'end_date_2' => 'End Date 2',
            'teacher_joining_date' => 'Teacher Joining Date',
            'teacher_department_id' => 'Teacher Department ID',
            'teacher_designation_id' => 'Teacher Designation ID',
            'teacher_category_id' => 'Teacher Category ID',
            'teacher_experience' => 'Teacher Experience',
            'teacher_course_id' => 'Teacher Course ID',
            'teacher_batch_id' => 'Teacher Batch ID',
            'teacher_section_id' => 'Teacher Section ID',
        ];
    }

    /**
     * Gets query for [[TeacherCountry]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTeacherCountry()
    {
        return $this->hasOne(Country::className(), ['country_id' => 'teacher_country_id']);
    }

    /**
     * Gets query for [[TeacherProvince]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTeacherProvince()
    {
        return $this->hasOne(Province::className(), ['province_id' => 'teacher_province_id']);
    }

    /**
     * Gets query for [[TeacherCity]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTeacherCity()
    {
        return $this->hasOne(City::className(), ['city_id' => 'teacher_city_id']);
    }

    /**
     * Gets query for [[TeacherDepartment]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTeacherDepartment()
    {
        return $this->hasOne(Department::className(), ['department_id' => 'teacher_department_id']);
    }

    /**
     * Gets query for [[TeacherDesignation]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTeacherDesignation()
    {
        return $this->hasOne(Designation::className(), ['designation_id' => 'teacher_designation_id']);
    }

    /**
     * Gets query for [[TeacherCategory]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTeacherCategory()
    {
        return $this->hasOne(Category::className(), ['category_id' => 'teacher_category_id']);
    }

    /**
     * Gets query for [[TeacherCourse]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTeacherCourse()
    {
        return $this->hasOne(Courses::className(), ['course_id' => 'teacher_course_id']);
    }

    /**
     * Gets query for [[TeacherBatch]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTeacherBatch()
    {
        return $this->hasOne(Batches::className(), ['batch_id' => 'teacher_batch_id']);
    }

    /**
     * Gets query for [[TeacherSection]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTeacherSection()
    {
        return $this->hasOne(Section::className(), ['section_id' => 'teacher_section_id']);
    }
}
