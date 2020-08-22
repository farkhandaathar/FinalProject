<?php

namespace app\modules\Announcements\models;

use Yii;

/**
 * This is the model class for table "emails".
 *
 * @property int $email_id
 * @property string $from
 * @property string $to
 * @property string $subject
 * @property string $text_body
 */
class Emails extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'emails';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['from', 'to', 'subject', 'text_body'], 'required'],
            [['from', 'to'], 'string', 'max' => 20],
            [['subject'], 'string', 'max' => 50],
            [['text_body'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'email_id' => 'Email ID',
            'from' => 'From',
            'to' => 'To',
            'subject' => 'Subject',
            'text_body' => 'Text Body',
        ];
    }
}
