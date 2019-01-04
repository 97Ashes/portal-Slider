<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "duyurupaneli".
 *
 * @property int $id
 * @property string $duyuruname
 * @property int $senderid
 * @property string $sendername
 */
class Duyurupaneli extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'duyurupaneli';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['duyuruname', 'senderid', 'sendername'], 'required'],
            [['senderid'], 'integer'],
            [['duyuruname'], 'string', 'max' => 25],
            [['sendername'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'duyuruname' => 'Duyuruname',
            'senderid' => 'Senderid',
            'sendername' => 'Sendername',
        ];
    }
}
