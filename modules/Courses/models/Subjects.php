<?php

namespace app\modules\Courses\models;

use Yii;

/**
 * This is the model class for table "subjects".
 *
 * @property int $subject_id
 * @property string $subject_code
 * @property string $subject_name
 * @property string $created_at
 * @property string $updated_at
 * @property int $is_status
 *
 * @property Result[] $results
 * @property Result[] $results0
 * @property Result[] $results1
 * @property Result[] $results2
 * @property Result[] $results3
 * @property Result[] $results4
 */
class Subjects extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'subjects';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['subject_code', 'subject_name', 'created_at', 'updated_at', 'is_status'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['is_status'], 'integer'],
            [['subject_code'], 'string', 'max' => 20],
            [['subject_name'], 'string', 'max' => 35],
            [['subject_code'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'subject_id' => 'Subject ID',
            'subject_code' => 'Subject Code',
            'subject_name' => 'Subject Name',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'is_status' => 'Is Status',
        ];
    }

    /**
     * Gets query for [[Results]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResults()
    {
        return $this->hasMany(Result::className(), ['subject1' => 'subject_id']);
    }

    /**
     * Gets query for [[Results0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResults0()
    {
        return $this->hasMany(Result::className(), ['subject2' => 'subject_id']);
    }

    /**
     * Gets query for [[Results1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResults1()
    {
        return $this->hasMany(Result::className(), ['subject4' => 'subject_id']);
    }

    /**
     * Gets query for [[Results2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResults2()
    {
        return $this->hasMany(Result::className(), ['subject5' => 'subject_id']);
    }

    /**
     * Gets query for [[Results3]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResults3()
    {
        return $this->hasMany(Result::className(), ['subject3' => 'subject_id']);
    }

    /**
     * Gets query for [[Results4]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResults4()
    {
        return $this->hasMany(Result::className(), ['subject6' => 'subject_id']);
    }
}
