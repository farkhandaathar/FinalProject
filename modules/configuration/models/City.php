<?php

namespace app\modules\configuration\models;

use Yii;

/**
 * This is the model class for table "city".
 *
 * @property int $city_id
 * @property string $city_name
 * @property int $created_by
 */
class City extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'city';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['city_name', 'created_by'], 'required'],
            [['created_by'], 'integer'],
            [['city_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'city_id' => 'City ID',
            'city_name' => 'City Name',
            'created_by' => 'Created By',
        ];
    }

    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['user_id' => 'created_by']);
    }

    public static function getAllCity()
    {
    	$dataTmp = self::find()->where(['is_status' => 0])->orderBy('city_name')->all();
		$result = yii\helpers\ArrayHelper::map($dataTmp, 'city_id', 'city_name');
		return $result;
    }
}
