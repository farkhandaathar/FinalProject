<?php

namespace app\modules\courses\models;

use Yii;

/**
 * This is the model class for table "previous_degrees".
 *
 * @property int $degree_id
 * @property string $degree_name
 * @property string $degree_duration
 * @property string $created_at
 * @property int $created_by
 */
class PreviousDegrees extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'previous_degrees';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['degree_name', 'degree_duration', 'created_at', 'created_by'], 'required'],
            [['created_at'], 'safe'],
            [['created_by'], 'integer'],
            [['degree_name'], 'string', 'max' => 50],
            [['degree_duration'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'degree_id' => 'Degree ID',
            'degree_name' => 'Degree Name',
            'degree_duration' => 'Degree Duration',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
        ];
    }
}
