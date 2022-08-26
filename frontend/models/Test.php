<?php

namespace app\models;

use Yii;

/**
 * This is the model class for collection "test".
 *
 * @property \MongoDB\BSON\ObjectID|string $_id
 * @property mixed $firstname
 * @property mixed $lastname
 */
class Test extends \yii\mongodb\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function collectionName()
    {
        return 'test';
    }

    /**
     * {@inheritdoc}
     */
    public function attributes()
    {
        return [
            '_id',
            'firstname',
            'lastname',
        ];
    }

    public function getTableSchema(){
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['firstname', 'lastname'], 'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
        ];
    }
}
