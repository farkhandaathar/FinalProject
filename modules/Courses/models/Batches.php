<?php

namespace app\modules\Courses\models;

use Yii;

/**
 * This is the model class for table "batches".
 *
 * @property int $batch_id
 * @property string $batch_name
 * @property string $batch_alias
 * @property string $start_date
 * @property string $end_date
 * @property string $created_at
 * @property int $created_by
 * @property int $is_status
 */
class Batches extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'batches';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['batch_name', 'batch_alias', 'start_date', 'end_date', 'created_at', 'created_by', 'is_status'], 'required'],
            [['start_date', 'end_date', 'created_at'], 'safe'],
            [['created_by', 'is_status'], 'integer'],
            [['batch_name'], 'string', 'max' => 120],
            [['batch_alias'], 'string', 'max' => 35],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'batch_id' => 'Batch ID',
            'batch_name' => 'Batch Name',
            'batch_alias' => 'Batch Alias',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'is_status' => 'Is Status',
        ];
    }
}
