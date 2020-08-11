<?php

namespace app\modules\Announcements\models;

use Yii;

/**
 * This is the model class for table "events".
 *
 * @property int $event_id
 * @property string $event_title
 * @property string $event_description
 * @property string $event_user_type
 * @property string $created_at
 * @property int $is_status
 */
class Events extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'events';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['event_title', 'event_description', 'event_user_type', 'created_at', 'is_status'], 'required'],
            [['created_at'], 'safe'],
            [['is_status'], 'integer'],
            [['event_title'], 'string', 'max' => 25],
            [['event_description'], 'string', 'max' => 255],
            [['event_user_type'], 'string', 'max' => 3],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'event_id' => 'Event ID',
            'event_title' => 'Event Title',
            'event_description' => 'Event Description',
            'event_user_type' => 'Event User Type',
            'created_at' => 'Created At',
            'is_status' => 'Is Status',
        ];
    }
}
