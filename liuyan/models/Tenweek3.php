<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tenweek3".
 *
 * @property integer $s_id
 * @property string $s_name
 * @property string $s_age
 * @property string $s_sex
 * @property string $s_phone
 * @property string $s_area
 * @property string $s_time
 */
class Tenweek3 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tenweek3';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['s_time'], 'safe'],
            [['s_name', 's_age', 's_sex', 's_phone', 's_area'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            's_id' => 'S ID',
            's_name' => 'S Name',
            's_age' => 'S Age',
            's_sex' => 'S Sex',
            's_phone' => 'S Phone',
            's_area' => 'S Area',
            's_time' => 'S Time',
        ];
    }
}
