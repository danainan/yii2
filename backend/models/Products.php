<?php

namespace app\models;

use Yii;

/**
 * This is the model class for collection "products".
 *
 * @property \MongoDB\BSON\ObjectID|string $_id
 * @property mixed $product_name
 * @property mixed $image_url
 * @property mixed $sizes
 * @property mixed $colors
 * @property mixed $price
 * @property mixed $status
 */
class Products extends \yii\mongodb\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function collectionName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function attributes()
    {
        return [
            '_id',
            'product_name',
            'image_url',
            'sizes',
            'colors',
            'price',
            'status',
            
            

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_name', 'image_url', 'sizes', 'colors','price', 'status'], 'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'product_name' => 'Product Name',
            'image_url' => 'Image Url',
            'sizes' => 'Sizes',
            'colors' => 'Colors',
            'price' => 'Price',
            'status' => 'Status',
        ];
    }

    public function getTableSchema(){
        return false;
    }
}
