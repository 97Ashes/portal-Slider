<?php

namespace kouosl\Slider\models;

use Yii;

/**
 * This is the model class for table "duyurugonder".
 *
 * @property int $id
 * @property string $sendername
 * @property string $senderposition
 * @property string $senderemail
 * @property int $senderid
 * @property string $senderdate
 */
class Duyurugonder extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'duyurugonder';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sendername', 'senderposition', 'senderemail', 'senderid'], 'required'],
            [['senderid'], 'integer'],
            [['senderdate'], 'safe'],
            [['sendername', 'senderposition'], 'string', 'max' => 20],
            [['senderemail'], 'string', 'max' => 128],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sendername' => 'Sendername',
            'senderposition' => 'Senderposition',
            'senderemail' => 'Senderemail',
            'senderid' => 'Senderid',
            'senderdate' => 'Senderdate',
        ];
    }
}
