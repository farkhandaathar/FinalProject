<?php

namespace app\modules\Announcements\models;

use Yii;

/**
 * This is the model class for table "notices".
 *
 * @property int $notice_id
 * @property string $notice_title
 * @property string $notice_description
 * @property string $notice_user_type
 * @property string $notice_date
 * @property string $notice_file_path
 * @property string $created_at
 * @property int $is_status
 */
class Notices extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'notices';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['notice_title', 'notice_description', 'notice_user_type', 'notice_date', 'notice_file_path', 'created_at', 'is_status'], 'required'],
            [['notice_date', 'created_at'], 'safe'],
            [['is_status'], 'integer'],
            [['notice_title'], 'string', 'max' => 25],
            [['notice_description'], 'string', 'max' => 255],
            [['notice_user_type'], 'string', 'max' => 3],
            [['notice_file_path'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'notice_id' => 'Notice ID',
            'notice_title' => 'Notice Title',
            'notice_description' => 'Notice Description',
            'notice_user_type' => 'Notice User Type',
            'notice_date' => 'Notice Date',
            'notice_file_path' => 'Notice File Path',
            'created_at' => 'Created At',
            'is_status' => 'Is Status',
        ];
    }
}
