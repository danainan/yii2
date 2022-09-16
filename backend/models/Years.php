<?php

namespace app\models;

use Yii;

/**
 * This is the model class for collection "years".
 *
 * @property \MongoDB\BSON\ObjectID|string $_id
 * @property mixed $years
 */
class Years extends \yii\mongodb\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function collectionName()
    {
        return 'years';
    }

    /**
     * {@inheritdoc}
     */
    public function attributes()
    {
        return [
            '_id',
            'years',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['years'], 'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'years' => 'Years',
        ];
    }
    public function getTableSchema(){
        return false;
    }
}
