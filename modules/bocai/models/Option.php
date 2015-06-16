<?php

namespace app\modules\bocai\models;

use Yii;

/**
 * This is the model class for table "bocai_option".
 *
 * @property integer $id
 * @property integer $pid
 * @property string $name
 * @property integer $user_count
 */
class Option extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bocai_option';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pid'], 'required'],
            [['pid', 'user_count'], 'integer'],
            [['name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pid' => 'Pid',
            'name' => 'Name',
            'user_count' => 'User Count',
        ];
    }
}
