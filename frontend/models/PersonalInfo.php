<?php

namespace app\models;

use Yii;

/**
 * This is the model class for collection "personal_info".
 *
 * @property \MongoDB\BSON\ObjectID|string $_id
 * @property mixed $image_url
 * @property mixed $firstname
 * @property mixed $lastname
 * @property mixed $nickname
 * @property mixed $age
 * @property mixed $dob
 * @property mixed $gender
 * @property mixed $high_school_name
 * @property mixed $graduation
 * @property mixed $college_name
 * @property mixed $majors
 * @property mixed $school_of
 * @property mixed $color
 * @property mixed $food
 * @property mixed $sport
 * @property mixed $com_langs
 * @property mixed $database
 * @property mixed $course
 * @property mixed $langs
 * @property mixed $facebook
 * @property mixed $line
 * @property mixed $instragram
 * @property mixed $e_mail
 * @property mixed $phone
 */
class PersonalInfo extends \yii\mongodb\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function collectionName()
    {
        return 'personal_info';
    }

    /**
     * {@inheritdoc}
     */
    public function attributes()
    {
        return [
            '_id',
            'image_url',
            'firstname',
            'lastname',
            'nickname',
            'age',
            'dob',
            'gender',
            'high_school_name',
            'graduation',
            'college_name',
            'majors',
            'school_of',
            'color',
            'food',
            'sport',
            'com_langs',
            'database',
            'course',
            'langs',
            'facebook',
            'line',
            'instragram',
            'e_mail',
            'phone',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['image_url', 'firstname', 'lastname', 'nickname', 'age', 'dob', 'gender', 'high_school_name', 'graduation', 'college_name', 'majors', 'school_of', 'color', 'food', 'sport', 'com_langs', 'database', 'course', 'langs', 'facebook', 'line', 'instragram', 'e_mail', 'phone'], 'safe']
        ];
    }

    public function getTableSchema(){
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'image_url' => 'Image Url',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'nickname' => 'Nickname',
            'age' => 'Age',
            'dob' => 'Dob',
            'gender' => 'Gender',
            'high_school_name' => 'High School Name',
            'graduation' => 'Graduation',
            'college_name' => 'College Name',
            'majors' => 'Majors',
            'school_of' => 'School Of',
            'color' => 'Color',
            'food' => 'Food',
            'sport' => 'Sport',
            'com_langs' => 'Com Langs',
            'database' => 'Database',
            'course' => 'Course',
            'langs' => 'Langs',
            'facebook' => 'Facebook',
            'line' => 'Line',
            'instragram' => 'Instragram',
            'e_mail' => 'E Mail',
            'phone' => 'Phone',
        ];
    }
}
