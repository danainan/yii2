<?php

namespace app\models;

use Yii;

/**
 * This is the model class for collection "categories".
 *
 * @property \MongoDB\BSON\ObjectID|string $_id
 * @property mixed $category_name
 * @property mixed $status
 */
class Categories extends \yii\mongodb\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function collectionName()
    {
        return 'categories';
    }

    /**
     * {@inheritdoc}
     */
    public function attributes()
    {
        return [
            '_id',
            'category_name',
            'status',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_name', 'status'], 'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'category_name' => 'Category Name',
            'status' => 'Status',
        ];
    }

    public function getTableSchema(){
        return false;
    }


}


