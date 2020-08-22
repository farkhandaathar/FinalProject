<?php

namespace app\modules\Courses\models;

use Yii;

/**
 * This is the model class for table "semesters".
 *
 * @property int $semester_id
 * @property string $semester_name
 * @property string $created_at
 * @property int $is_status
 *
 * @property Semester1Students[] $semester1Students
 * @property Semester2Students[] $semester2Students
 */
class Semesters extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'semesters';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['semester_name', 'created_at', 'is_status'], 'required'],
            [['created_at'], 'safe'],
            [['is_status'], 'integer'],
            [['semester_name'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'semester_id' => 'Semester ID',
            'semester_name' => 'Semester Name',
            'created_at' => 'Created At',
            'is_status' => 'Is Status',
        ];
    }

    /**
     * Gets query for [[Semester1Students]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSemester1Students()
    {
        return $this->hasMany(Semester1Students::className(), ['semester' => 'semester_id']);
    }

    /**
     * Gets query for [[Semester2Students]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSemester2Students()
    {
        return $this->hasMany(Semester2Students::className(), ['semester' => 'semester_id']);
    }
}
