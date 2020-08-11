<?php

namespace app\modules\Courses\models;

use Yii;

/**
 * This is the model class for table "courses".
 *
 * @property int $course_id
 * @property string $course_name
 * @property string $course_code
 * @property string $course_alias
 * @property int $created_by
 * @property string $created_at
 * @property int $is_status
 */
class Courses extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'courses';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['course_name', 'course_code', 'course_alias', 'created_by', 'created_at', 'is_status'], 'required'],
            [['created_by', 'is_status'], 'integer'],
            [['created_at'], 'safe'],
            [['course_name'], 'string', 'max' => 100],
            [['course_code'], 'string', 'max' => 50],
            [['course_alias'], 'string', 'max' => 35],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'course_id' => 'Course ID',
            'course_name' => 'Course Name',
            'course_code' => 'Course Code',
            'course_alias' => 'Course Alias',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'is_status' => 'Is Status',
        ];
    }
}
