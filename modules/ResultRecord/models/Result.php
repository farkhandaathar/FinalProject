<?php

namespace app\modules\ResultRecord\models;

use Yii;
use app\modules\Courses\models\Section;
use app\modules\configuration\models\Department;
use app\modules\Courses\models\Semesters;
use app\modules\Courses\models\Batches;
use app\modules\Courses\models\Subjects;
/**
 * This is the model class for table "result".
 *
 * @property int $student_id
 * @property string $roll_no
 * @property string $registration_no
 * @property string $student_name
 * @property string $father_name
 * @property string $department
 * @property string $semester
 * @property string $section
 * @property int $subject1
 * @property int $subjec1_obtain_marks
 * @property int $subject1_total_marks
 * @property int $subject2
 * @property int $subject2_obtain_marks
 * @property int $subject2_total_marks
 * @property int $subject3
 * @property int $subject3_obtain_marks
 * @property int $subject3_total_marks
 * @property int $subject4
 * @property int $subject4_obtain_marks
 * @property int $subject4_total_marks
 * @property int $subject5
 * @property int $subject5_obtain_marks
 * @property int $subject5_total_marks
 * @property int $subject6
 * @property int $subject6_obtain_marks
 * @property int $subject6_total_marks
 *
 * @property Subjects $subject10
 * @property Subjects $subject20
 * @property Subjects $subject40
 * @property Subjects $subject50
 * @property Subjects $subject30
 * @property Subjects $subject60
 */
class Result extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'result';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['roll_no', 'registration_no', 'student_name', 'father_name', 'department', 'semester', 'section', 'subject1', 'subjec1_obtain_marks', 'subject1_total_marks', 'subject2', 'subject2_obtain_marks', 'subject2_total_marks', 'subject3', 'subject3_obtain_marks', 'subject3_total_marks', 'subject4', 'subject4_obtain_marks', 'subject4_total_marks', 'subject5', 'subject5_obtain_marks', 'subject5_total_marks', 'subject6', 'subject6_obtain_marks', 'subject6_total_marks'], 'required'],
            [['subject1', 'subjec1_obtain_marks', 'subject1_total_marks', 'subject2', 'subject2_obtain_marks', 'subject2_total_marks', 'subject3', 'subject3_obtain_marks', 'subject3_total_marks', 'subject4', 'subject4_obtain_marks', 'subject4_total_marks', 'subject5', 'subject5_obtain_marks', 'subject5_total_marks', 'subject6', 'subject6_obtain_marks', 'subject6_total_marks'], 'integer'],
            [['roll_no', 'registration_no', 'department', 'semester', 'section'], 'string', 'max' => 20],
            [['student_name', 'father_name'], 'string', 'max' => 50],
            [['roll_no'], 'unique'],
            [['registration_no'], 'unique'],
            [['subject1'], 'exist', 'skipOnError' => true, 'targetClass' => Subjects::className(), 'targetAttribute' => ['subject1' => 'subject_id']],
            [['subject2'], 'exist', 'skipOnError' => true, 'targetClass' => Subjects::className(), 'targetAttribute' => ['subject2' => 'subject_id']],
            [['subject4'], 'exist', 'skipOnError' => true, 'targetClass' => Subjects::className(), 'targetAttribute' => ['subject4' => 'subject_id']],
            [['subject5'], 'exist', 'skipOnError' => true, 'targetClass' => Subjects::className(), 'targetAttribute' => ['subject5' => 'subject_id']],
            [['subject3'], 'exist', 'skipOnError' => true, 'targetClass' => Subjects::className(), 'targetAttribute' => ['subject3' => 'subject_id']],
            [['subject6'], 'exist', 'skipOnError' => true, 'targetClass' => Subjects::className(), 'targetAttribute' => ['subject6' => 'subject_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'student_id' => 'Student ID',
            'roll_no' => 'Roll No',
            'registration_no' => 'Registration No',
            'student_name' => 'Student Name',
            'father_name' => 'Father Name',
            'department' => 'Department',
            'semester' => 'Semester',
            'section' => 'Section',
            'subject1' => 'Subject1',
            'subjec1_obtain_marks' => 'Subjec1 Obtain Marks',
            'subject1_total_marks' => 'Subject1 Total Marks',
            'subject2' => 'Subject2',
            'subject2_obtain_marks' => 'Subject2 Obtain Marks',
            'subject2_total_marks' => 'Subject2 Total Marks',
            'subject3' => 'Subject3',
            'subject3_obtain_marks' => 'Subject3 Obtain Marks',
            'subject3_total_marks' => 'Subject3 Total Marks',
            'subject4' => 'Subject4',
            'subject4_obtain_marks' => 'Subject4 Obtain Marks',
            'subject4_total_marks' => 'Subject4 Total Marks',
            'subject5' => 'Subject5',
            'subject5_obtain_marks' => 'Subject5 Obtain Marks',
            'subject5_total_marks' => 'Subject5 Total Marks',
            'subject6' => 'Subject6',
            'subject6_obtain_marks' => 'Subject6 Obtain Marks',
            'subject6_total_marks' => 'Subject6 Total Marks',
        ];
    }

    /**
     * Gets query for [[Subject10]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubject10()
    {
        return $this->hasOne(Subjects::className(), ['subject_id' => 'subject1']);
    }

    /**
     * Gets query for [[Subject20]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubject20()
    {
        return $this->hasOne(Subjects::className(), ['subject_id' => 'subject2']);
    }

    /**
     * Gets query for [[Subject40]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubject40()
    {
        return $this->hasOne(Subjects::className(), ['subject_id' => 'subject4']);
    }

    /**
     * Gets query for [[Subject50]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubject50()
    {
        return $this->hasOne(Subjects::className(), ['subject_id' => 'subject5']);
    }

    /**
     * Gets query for [[Subject30]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubject30()
    {
        return $this->hasOne(Subjects::className(), ['subject_id' => 'subject3']);
    }

    /**
     * Gets query for [[Subject60]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubject60()
    {
        return $this->hasOne(Subjects::className(), ['subject_id' => 'subject6']);
    }
}
