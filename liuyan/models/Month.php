<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "month".
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property string $addtime
 */
class Month extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'month';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['addtime'], 'safe'],
            [['title'], 'string', 'max' => 100],
            [['content'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'addtime' => 'Addtime',
        ];
    }
}
