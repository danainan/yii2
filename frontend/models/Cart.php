<?php

namespace app\models;

use Yii;

/**
 * This is the model class for collection "cart".
 *
 * @property \MongoDB\BSON\ObjectID|string $_id
 * @property mixed $product_id
 * @property mixed $size
 * @property mixed $color
 * @property mixed $price
 * @property mixed $quantity
 * @property mixed $user_id
 */
class Cart extends \yii\mongodb\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function collectionName()
    {
        return 'cart';
    }

    /**
     * {@inheritdoc}
     */
    public function attributes()
    {
        return [
            '_id',
            'product_id',
            'size',
            'color',
            'price',
            'quantity',
            'user_id',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id', 'size', 'color', 'price', 'quantity', 'user_id'], 'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'product_id' => 'Product ID',
            'size' => 'Size',
            'color' => 'Color',
            'price' => 'Price',
            'quantity' => 'Quantity',
            'user_id' => 'User ID',
        ];
    }

    public function getTableSchema(){
        return false;
    }
}
