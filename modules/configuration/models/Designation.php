<?php

namespace app\modules\configuration\models;

use Yii;

/**
 * This is the model class for table "designation".
 *
 * @property int $designation_id
 * @property string $designation_name
 * @property int $created_by
 * @property int $is_status
 */
class Designation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'designation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['designation_name', 'created_by', 'is_status'], 'required'],
            [['created_by', 'is_status'], 'integer'],
            [['designation_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'designation_id' => 'Designation ID',
            'designation_name' => 'Designation Name',
            'created_by' => 'Created By',
            'is_status' => 'Is Status',
        ];
    }
}
