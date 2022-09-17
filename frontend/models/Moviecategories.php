<?php

namespace app\models;

use Yii;

/**
 * This is the model class for collection "moviecategories".
 *
 * @property \MongoDB\BSON\ObjectID|string $_id
 * @property mixed $category_type
 */
class Moviecategories extends \yii\mongodb\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function collectionName()
    {
        return 'moviecategories';
    }

    /**
     * {@inheritdoc}
     */
    public function attributes()
    {
        return [
            '_id',
            'category_type',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_type'], 'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'category_type' => 'Category Type',
        ];
    }
    public function getTableSchema(){
        return false;
    }
}
