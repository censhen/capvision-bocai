<?php

namespace app\modules\bocai\models;
use Yii;

/**
 * This is the model class for table "bocai_user_option".
 *
 * @property integer $id
 * @property integer $pid
 * @property integer $oid
 * @property integer $uid
 */
class UserOption extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bocai_user_option';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pid', 'oid', 'uid'], 'required'],
            [['pid', 'oid', 'uid'], 'integer']
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
            'oid' => 'Oid',
            'uid' => 'Uid',
        ];
    }
}
