<?php

namespace app\models;

use Yii;

/**
 * This is the model class for collection "comments".
 *
 * @property \MongoDB\BSON\ObjectID|string $_id
 * @property mixed $comment
 */
class Comments extends \yii\mongodb\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function collectionName()
    {
        return 'comments';
    }

    /**
     * {@inheritdoc}
     */
    public function attributes()
    {
        return [
            '_id',
            'comment',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['comment'], 'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'comment' => 'Comment',
        ];
    }
    public function getTableSchema(){
        return false;
    }
}
