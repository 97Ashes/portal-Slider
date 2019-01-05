<?php

namespace kouosl\portal-Slider\models;

use Yii;

/**
 * This is the model class for table "slider".
 *
 * @property int $id
 * @property string $content
 * @property string $file
 * @property int $folder
 */
class Slider extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'slider';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content', 'file', 'folder'], 'required'],
            [['content'], 'string'],
            [['folder'], 'integer'],
            [['file'], 'string', 'max' => 64],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'content' => 'Content',
            'file' => 'File',
            'folder' => 'Folder',
        ];
    }
}
