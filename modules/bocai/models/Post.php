<?php

namespace app\modules\bocai\models;

use Yii;

/**
 * This is the model class for table "bocai_post".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property integer $base_point
 * @property integer $entry_point
 * @property integer $status
 * @property integer $total_point
 * @property integer $result_option_id
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bocai_post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'base_point', 'total_point'], 'required'],
            [['description'], 'string'],
            [['base_point', 'entry_point', 'status', 'total_point', 'result_option_id'], 'integer'],
            [['title'], 'string', 'max' => 255]
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
            'description' => 'Description',
            'base_point' => 'Base Point',
            'entry_point' => 'Entry Point',
            'status' => 'Status',
            'total_point' => 'Total Point',
            'result_option_id' => 'Result Option ID',
        ];
    }
}
