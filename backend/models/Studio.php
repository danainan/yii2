<?php

namespace app\models;

use Yii;

/**
 * This is the model class for collection "studio".
 *
 * @property \MongoDB\BSON\ObjectID|string $_id
 * @property mixed $studio_name
 * @property mixed $studio_img
 * @property mixed $details
 */
class Studio extends \yii\mongodb\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function collectionName()
    {
        return 'studio';
    }

    /**
     * {@inheritdoc}
     */
    public function attributes()
    {
        return [
            '_id',
            'studio_name',
            'studio_img',
            'details',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['studio_name', 'studio_img', 'details'], 'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'studio_name' => 'Studio Name',
            'studio_img' => 'Studio Img',
            'details' => 'Details',
        ];
    }
    public function getTableSchema(){
        return false;
    }
}
