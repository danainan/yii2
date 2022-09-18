<?php

namespace app\models;

use Yii;

/**
 * This is the model class for collection "movieusers".
 *
 * @property \MongoDB\BSON\ObjectID|string $_id
 * @property mixed $usernames
 * @property mixed $user_img
 * @property mixed $gender
 * @property mixed $age
 * @property mixed $email
 */
class Movieusers extends \yii\mongodb\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function collectionName()
    {
        return 'movieusers';
    }

    /**
     * {@inheritdoc}
     */
    public function attributes()
    {
        return [
            '_id',
            'usernames',
            'user_img',
            'gender',
            'age',
            'email',
            'user_id',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['usernames', 'user_img', 'gender', 'age', 'email','user_id'], 'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'usernames' => 'Usernames',
            'user_img' => 'User Img',
            'gender' => 'Gender',
            'age' => 'Age',
            'email' => 'Email',
            'user_id' => 'User ID',
        ];
    }
    public function getTableSchema(){
        return false;
    }
}
