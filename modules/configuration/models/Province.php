<?php

namespace app\modules\configuration\models;

use Yii;

/**
 * This is the model class for table "province".
 *
 * @property int $province_id
 * @property string $province_name
 * @property int $created_by
 */
class Province extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'province';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['province_name', 'created_by'], 'required'],
            [['created_by'], 'integer'],
            [['province_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'province_id' => 'Province ID',
            'province_name' => 'Province Name',
            'created_by' => 'Created By',
        ];
    }
}
