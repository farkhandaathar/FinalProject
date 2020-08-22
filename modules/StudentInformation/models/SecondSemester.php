<?php

namespace app\modules\StudentInformation\models;

use Yii;
use app\modules\configuration\models\Department;
use app\modules\Courses\models\Section;
use app\modules\Courses\models\Courses;
use app\modules\Courses\models\Batches;
use app\modules\Courses\models\Semesters;
/**
 * This is the model class for table "second_semester".
 *
 * @property int $student_id
 * @property string $student_roll_no
 * @property string $student_registration_no
 * @property string $student_name
 * @property string $father_name
 * @property int $department
 * @property int $semester
 * @property int $batch
 * @property int $section
 * @property int $is_status
 *
 * @property Department $department0
 * @property Semesters $semester0
 * @property Batches $batch0
 * @property Section $section0
 */
class SecondSemester extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'second_semester';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['student_roll_no', 'student_registration_no', 'student_name', 'father_name', 'department', 'semester', 'batch', 'section', 'is_status'], 'required'],
            [['department', 'semester', 'batch', 'section', 'is_status'], 'integer'],
            [['student_roll_no', 'student_registration_no'], 'string', 'max' => 20],
            [['student_name', 'father_name'], 'string', 'max' => 50],
            [['department'], 'exist', 'skipOnError' => true, 'targetClass' => Department::className(), 'targetAttribute' => ['department' => 'department_id']],
            [['semester'], 'exist', 'skipOnError' => true, 'targetClass' => Semesters::className(), 'targetAttribute' => ['semester' => 'semester_id']],
            [['batch'], 'exist', 'skipOnError' => true, 'targetClass' => Batches::className(), 'targetAttribute' => ['batch' => 'batch_id']],
            [['section'], 'exist', 'skipOnError' => true, 'targetClass' => Section::className(), 'targetAttribute' => ['section' => 'section_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'student_id' => 'Student ID',
            'student_roll_no' => 'Student Roll No',
            'student_registration_no' => 'Student Registration No',
            'student_name' => 'Student Name',
            'father_name' => 'Father Name',
            'department' => 'Department',
            'semester' => 'Semester',
            'batch' => 'Batch',
            'section' => 'Section',
            'is_status' => 'Is Status',
        ];
    }

    /**
     * Gets query for [[Department0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDepartment0()
    {
        return $this->hasOne(Department::className(), ['department_id' => 'department']);
    }

    /**
     * Gets query for [[Semester0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSemester0()
    {
        return $this->hasOne(Semesters::className(), ['semester_id' => 'semester']);
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

    /**
     * Gets query for [[Section0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSection0()
    {
        return $this->hasOne(Section::className(), ['section_id' => 'section']);
    }
}
