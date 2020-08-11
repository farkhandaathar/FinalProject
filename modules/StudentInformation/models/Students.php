<?php

namespace app\modules\StudentInformation\models;

use Yii;
use app\modules\configuration\models\Country;
use app\modules\configuration\models\Province;
use app\modules\configuration\models\City;
use app\modules\Courses\models\Section;
use app\modules\Courses\models\Courses;
use app\modules\Courses\models\Batches;
use app\modules\Courses\models\PreviousDegrees;
use app\models\User;

/**
 * This is the model class for table "students".
 *
 * @property int $student_id
 * @property string $student_rollno
 * @property string $student_registration
 * @property string $student_first_name
 * @property string $student_middle_name
 * @property string $student_last_name
 * @property string $father_first_name
 * @property string $father_middle_name
 * @property string $father_last_name
 * @property string $student_cnic
 * @property string $student_gender
 * @property string $student_dob
 * @property string $student_email
 * @property int $student_phone_no_1
 * @property int $student_phone_no_2
 * @property string $guardian_first_name
 * @property string $guardian_middle_name
 * @property string $guardian_last_name
 * @property string $guardian_cnic
 * @property string $guardian_relation
 * @property string $guardian_email
 * @property int $guardian_phone_no_1
 * @property int $guardian_phone_no_2
 * @property string $student_permanent_address_1
 * @property string $student_permanent_address_2
 * @property int $premanent_city_zip_code
 * @property int $permanent_country_id
 * @property int $permanent_province_id
 * @property int $permanent_city_id
 * @property string $student_temporary_address_1
 * @property string $student_temporary_address_2
 * @property int $temporary_country_id
 * @property int $temporary_province_id
 * @property int $temporary_city_id
 * @property int $temporary_city_zip_code
 * @property int $degree
 * @property int $batch
 * @property int $section
 * @property string $degree_start_date
 * @property string $degree_end_date
 * @property string $student_status
 * @property int $previous_degree_1
 * @property string $matric_degree_start_date
 * @property string $matric_degree_end_date
 * @property int $matric_marks_obtained
 * @property int $matric_marks_total
 * @property string $matric_marks_percentage
 * @property int $previous_degree_2
 * @property string $inter_degree_start_date
 * @property string $inter_degree_end_date
 * @property int $inter_marks_obtain
 * @property int $inter_marks_total
 * @property string $inter_marks_percentage
 *
 * @property Country $permanentCountry
 * @property Section $section0
 * @property PreviousDegrees $previousDegree1
 * @property PreviousDegrees $previousDegree2
 * @property Province $permanentProvince
 * @property City $permanentCity
 * @property Country $temporaryCountry
 * @property Country $temporaryCountry0
 * @property Province $temporaryProvince
 * @property City $temporaryCity
 * @property Courses $degree0
 * @property Batches $batch0
 */
class Students extends \yii\db\ActiveRecord
{
    const TYPE_MALE= 'MALE';
    const TYPE_FEMALE='FEMALE';
    const TYPE_REJOIN = 'REJOIN';
    const TYPE_PASSOUT = 'PASSOUT';
    const TYPE_DETAIN = "DETAIN";
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'students';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['student_rollno', 'student_registration', 'student_first_name', 'student_last_name', 'father_first_name',  'father_last_name', 'student_cnic', 'student_gender', 'student_dob', 'student_email', 'student_phone_no_1',  'guardian_first_name', 'guardian_last_name', 'guardian_cnic', 'guardian_relation', 'guardian_email', 'guardian_phone_no_1', 'student_permanent_address_1',  'premanent_city_zip_code', 'permanent_country_id', 'permanent_province_id', 'permanent_city_id','degree', 'batch', 'section', 'degree_start_date', 'degree_end_date', 'student_status', 'previous_degree_1', 'matric_degree_start_date', 'matric_degree_end_date', 'matric_marks_obtained', 'matric_marks_total', 'matric_marks_percentage', 'previous_degree_2', 'inter_degree_start_date', 'inter_degree_end_date', 'inter_marks_obtain', 'inter_marks_total', 'inter_marks_percentage'], 'required'],
            [['student_dob', 'degree_start_date', 'degree_end_date', 'matric_degree_start_date', 'matric_degree_end_date', 'inter_degree_start_date', 'inter_degree_end_date'], 'safe'],
            [['student_phone_no_1', 'student_phone_no_2', 'guardian_phone_no_1', 'guardian_phone_no_2', 'premanent_city_zip_code', 'permanent_country_id', 'permanent_province_id', 'permanent_city_id', 'temporary_country_id', 'temporary_province_id', 'temporary_city_id', 'temporary_city_zip_code', 'degree', 'batch', 'section', 'previous_degree_1', 'matric_marks_obtained', 'matric_marks_total', 'previous_degree_2', 'inter_marks_obtain', 'inter_marks_total'], 'integer'],
            [['student_rollno', 'student_registration', 'matric_marks_percentage', 'inter_marks_percentage'], 'string', 'max' => 11],
            [['student_first_name', 'student_middle_name', 'student_last_name', 'father_first_name', 'father_middle_name', 'father_last_name', 'guardian_first_name', 'guardian_middle_name', 'guardian_last_name'], 'string', 'max' => 50],
            [['student_cnic', 'student_gender', 'guardian_cnic', 'guardian_relation', 'student_status'], 'string', 'max' => 20],
            [['student_email', 'guardian_email'], 'string', 'max' => 65],
            [['student_permanent_address_1', 'student_permanent_address_2', 'student_temporary_address_1', 'student_temporary_address_2'], 'string', 'max' => 255],
            [['permanent_country_id'], 'exist', 'skipOnError' => true, 'targetClass' => Country::className(), 'targetAttribute' => ['permanent_country_id' => 'country_id']],
            [['section'], 'exist', 'skipOnError' => true, 'targetClass' => Section::className(), 'targetAttribute' => ['section' => 'section_id']],
            [['previous_degree_1'], 'exist', 'skipOnError' => true, 'targetClass' => PreviousDegrees::className(), 'targetAttribute' => ['previous_degree_1' => 'degree_id']],
            [['previous_degree_2'], 'exist', 'skipOnError' => true, 'targetClass' => PreviousDegrees::className(), 'targetAttribute' => ['previous_degree_2' => 'degree_id']],
            [['permanent_province_id'], 'exist', 'skipOnError' => true, 'targetClass' => Province::className(), 'targetAttribute' => ['permanent_province_id' => 'province_id']],
            [['permanent_city_id'], 'exist', 'skipOnError' => true, 'targetClass' => City::className(), 'targetAttribute' => ['permanent_city_id' => 'city_id']],
            [['temporary_country_id'], 'exist', 'skipOnError' => true, 'targetClass' => Country::className(), 'targetAttribute' => ['temporary_country_id' => 'country_id']],
            [['temporary_country_id'], 'exist', 'skipOnError' => true, 'targetClass' => Country::className(), 'targetAttribute' => ['temporary_country_id' => 'country_id']],
            [['temporary_province_id'], 'exist', 'skipOnError' => true, 'targetClass' => Province::className(), 'targetAttribute' => ['temporary_province_id' => 'province_id']],
            [['temporary_city_id'], 'exist', 'skipOnError' => true, 'targetClass' => City::className(), 'targetAttribute' => ['temporary_city_id' => 'city_id']],
            [['degree'], 'exist', 'skipOnError' => true, 'targetClass' => Courses::className(), 'targetAttribute' => ['degree' => 'course_id']],
            [['batch'], 'exist', 'skipOnError' => true, 'targetClass' => Batches::className(), 'targetAttribute' => ['batch' => 'batch_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'student_id' => 'Student ID',
            'student_rollno' => 'Roll No',
            'student_registration' => 'Registration NO',
            'student_first_name' => 'Student First Name',
            'student_middle_name' => 'Student Middle Name',
            'student_last_name' => 'Student Last Name',
            'father_first_name' => 'Father First Name',
            'father_middle_name' => 'Father Middle Name',
            'father_last_name' => 'Father Last Name',
            'student_cnic' => 'Student CNIC',
            'student_gender' => ' Gender',
            'student_dob' => 'Date of birth',
            'student_email' => ' Email',
            'student_phone_no_1' => ' Phone No 1',
            'student_phone_no_2' => 'Phone No 2',
            'guardian_first_name' => 'Guardian First Name',
            'guardian_middle_name' => 'Guardian Middle Name',
            'guardian_last_name' => 'Guardian Last Name',
            'guardian_cnic' => 'Guardian CNIC',
            'guardian_relation' => 'Guardian Relation',
            'guardian_email' => 'Email',
            'guardian_phone_no_1' => 'Phone No 1',
            'guardian_phone_no_2' => 'Phone No 2',
            'student_permanent_address_1' => 'Address Line 1',
            'student_permanent_address_2' => 'Address Line 2',
            'premanent_city_zip_code' => ' Zip Code',
            'permanent_country_id' => ' Country ',
            'permanent_province_id' => ' Province',
            'permanent_city_id' => 'City',
            'student_temporary_address_1' => ' Address Line 1',
            'student_temporary_address_2' => ' Address Line 2',
            'temporary_country_id' => 'Country',
            'temporary_province_id' => 'Province',
            'temporary_city_id' => 'City',
            'temporary_city_zip_code' => 'Zip Code',
            'degree' => 'Course',
            'batch' => 'Batch',
            'section' => 'Section',
            'degree_start_date' => 'Course Start Date',
            'degree_end_date' => 'Course End Date',
            'student_status' => 'Student Status',
            'previous_degree_1' => 'Matric',
            'matric_degree_start_date' => 'Start Date',
            'matric_degree_end_date' => 'End Date',
            'matric_marks_obtained' => 'Marks Obtained',
            'matric_marks_total' => ' Marks Total',
            'matric_marks_percentage' => ' Marks Percentage',
            'previous_degree_2' => 'Intermediate',
            'inter_degree_start_date' => 'Start Date',
            'inter_degree_end_date' => 'End Date',
            'inter_marks_obtain' => ' Marks Obtain',
            'inter_marks_total' => 'Marks Total',
            'inter_marks_percentage' => 'Marks Percentage',
        ];
    }

    /**
     * Gets query for [[PermanentCountry]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPermanentCountry()
    {
        return $this->hasOne(Country::className(), ['country_id' => 'permanent_country_id']);
    }

    /**
     * Gets query for [[Section0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSection0()
    {
        return $this->hasOne(Section::className(), ['section_id' => 'section']);
    }
    public static function getGenderOptions()
    {
    	return[
        	 self::TYPE_MALE =>  'MALE',
        	 self::TYPE_FEMALE => 'FEMALE',
    	];
    }
    public static function getStudentStatus()
    {
    	return[
        	self::TYPE_REJOIN => 'REJOIN',
            self::TYPE_PASSOUT => 'PASSOUT',
            self::TYPE_DETAIN => "DETAIN",
    	];
    }

    /**
     * Gets query for [[PreviousDegree1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPreviousDegree1()
    {
        return $this->hasOne(PreviousDegrees::className(), ['degree_id' => 'previous_degree_1']);
    }

    /**
     * Gets query for [[PreviousDegree2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPreviousDegree2()
    {
        return $this->hasOne(PreviousDegrees::className(), ['degree_id' => 'previous_degree_2']);
    }

    /**
     * Gets query for [[PermanentProvince]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPermanentProvince()
    {
        return $this->hasOne(Province::className(), ['province_id' => 'permanent_province_id']);
    }

    /**
     * Gets query for [[PermanentCity]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPermanentCity()
    {
        return $this->hasOne(City::className(), ['city_id' => 'permanent_city_id']);
    }

    /**
     * Gets query for [[TemporaryCountry]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTemporaryCountry()
    {
        return $this->hasOne(Country::className(), ['country_id' => 'temporary_country_id']);
    }

    /**
     * Gets query for [[TemporaryCountry0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTemporaryCountry0()
    {
        return $this->hasOne(Country::className(), ['country_id' => 'temporary_country_id']);
    }

    /**
     * Gets query for [[TemporaryProvince]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTemporaryProvince()
    {
        return $this->hasOne(Province::className(), ['province_id' => 'temporary_province_id']);
    }

    /**
     * Gets query for [[TemporaryCity]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTemporaryCity()
    {
        return $this->hasOne(City::className(), ['city_id' => 'temporary_city_id']);
    }

    /**
     * Gets query for [[Degree0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDegree0()
    {
        return $this->hasOne(Courses::className(), ['course_id' => 'degree']);
    }

    /**
     * Gets query for [[Batch0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBatch0()
    {
        return $this->hasOne(Batches::className(), ['batch_id' => 'batch']);
    }
}
