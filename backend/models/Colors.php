<?php

namespace app\models;

use Yii;

/**
 * This is the model class for collection "colors".
 *
 * @property \MongoDB\BSON\ObjectID|string $_id
 * @property mixed $color_name
 * @property mixed $color_code
 * @property mixed $status
 */
class Colors extends \yii\mongodb\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function collectionName()
    {
        return 'colors';
    }

    /**
     * {@inheritdoc}
     */
    public function attributes()
    {
        return [
            '_id',
            'color_name',
            'color_code',
            'status',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['color_name', 'color_code', 'status'], 'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'color_name' => 'Color Name',
            'color_code' => 'Color Code',
            'status' => 'Status',
        ];
    }

    public function getTableSchema(){
        return false;
    }
}
