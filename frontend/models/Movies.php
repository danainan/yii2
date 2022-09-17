<?php

namespace app\models;



use Yii;

/**
 * This is the model class for collection "movies".
 *
 * @property \MongoDB\BSON\ObjectID|string $_id
 * @property mixed $movies_name
 * @property mixed $movies_img
 * @property mixed $descriptions
 * @property mixed $categories
 * @property mixed $actors
 * @property mixed $years
 * @property mixed $movies_rate
 * @property mixed $comment
 * @property mixed $ratting
 */
class Movies extends \yii\mongodb\ActiveRecord
{
    public $upload_foler = '../../backend/web/uploads';
    /**
     * {@inheritdoc}
     */
    public static function collectionName()
    {
        return 'movies';
    }

    /**
     * {@inheritdoc}
     */
    public function attributes()
    {
        return [
            '_id',
            'movies_name',
            'movies_img',
            'descriptions',
            'categories',
            'actors',
            'years',
            'movies_rate',
            // 'comment',
            // 'ratting',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['movies_name', 'descriptions', 'categories', 'actors', 'years', 'movies_rate'], 'required'],
            [['movies_name', 'descriptions', 'categories', 'actors', 'years', 'movies_rate'], 'string'],
            [['movies_img'], 'file',
                'skipOnEmpty' => true, 
                'extensions' => 'jpg, png'
            
            ], 
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'movies_name' => 'Movies Name',
            'movies_img' => 'Movies Img',
            'descriptions' => 'Descriptions',
            'categories' => 'Categories',
            'actors' => 'Actors',
            'years' => 'Years',
            'movies_rate' => 'Movies Rate',
            
        ];
    }
    public function getTableSchema(){
        return false;
    }

    public function getUploadPath(){
        return Yii::getAlias('@webroot').'/'.$this->upload_foler.'/';
      }
      
      public function getUploadUrl(){
        return Yii::getAlias('@web').'/'.$this->upload_foler.'/';
      }
      
      public function getPhotoViewer(){
        return empty($this->movies_img) ? Yii::getAlias('/backend/web/uploads/').'/img/none.png' : $this->getUploadUrl().$this->movies_img;
      }
}
