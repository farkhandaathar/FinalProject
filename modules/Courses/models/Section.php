<?php

namespace app\modules\Courses\models;

use Yii;

/**
 * This is the model class for table "section".
 *
 * @property int $section_id
 * @property string $section_name
 * @property int $section_course_id
 * @property int $intake
 * @property string $created_at
 * @property int $created_by
 * @property int $is_status
 */
class Section extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'section';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['section_name', 'section_course_id', 'intake', 'created_at', 'created_by', 'is_status'], 'required'],
            [['section_course_id', 'intake', 'created_by', 'is_status'], 'integer'],
            [['created_at'], 'safe'],
            [['section_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'section_id' => 'Section ID',
            'section_name' => 'Section Name',
            'section_course_id' => 'Section Course ID',
            'intake' => 'Intake',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'is_status' => 'Is Status',
        ];
    }
}
