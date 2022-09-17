<?php

namespace app\models;

use Yii;

/**
 * This is the model class for collection "bookmark".
 *
 * @property \MongoDB\BSON\ObjectID|string $_id
 * @property mixed $movie_id
 * @property mixed $user_id
 */
class Bookmark extends \yii\mongodb\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function collectionName()
    {
        return 'bookmark';
    }

    /**
     * {@inheritdoc}
     */
    public function attributes()
    {
        return [
            '_id',
            'movie_id',
            'user_id',
            'modules'
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['movie_id', 'user_id'], 'safe'],

            ['modules' => [
                'favorites' => [
                    'class' => 'thyseus\favorites\Module',
                ],
            ]]
            
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'movie_id' => 'Movie ID',
            'user_id' => 'User ID',
        ];
    }
    public function getTableSchema(){
        return false;
    }
}
