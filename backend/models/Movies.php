<?php

namespace app\models;

use Yii;
use \yii\web\UploadedFile;

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
 */
class Movies extends \yii\mongodb\ActiveRecord
{
    public $upload_foler = 'uploads';
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
    public function getTableSchema()
    {
        return false;
    }

    public function upload($model , $attribute)
    {
        $movies_img = UploadedFile::getInstance($model, $attribute);
        $path = $this->getUploadPath();
        if ($this->validate() && $movies_img !== null) {
            $fileName = md5($movies_img->baseName . time()) . '.' . $movies_img->extension;
            if ($movies_img->saveAs($path . $fileName)) {
                return $fileName;
            }
        }
        return $model->isNewRecord ? false : $model->getOldAttribute($attribute);
    }

    public function getUploadPath(){
        return Yii::getAlias('@webroot').'/'.$this->upload_foler.'/';
      }
      
      public function getUploadUrl(){
        return Yii::getAlias('@web').'/'.$this->upload_foler.'/';
      }
      
      public function getPhotoViewer(){
        return empty($this->movies_img) ? Yii::getAlias('@web').'/img/none.png' : $this->getUploadUrl().$this->movies_img;
      }
      public function removePhoto($fileName){
        if(!empty($fileName)){
          $file = $this->getUploadPath().$fileName;
          if(file_exists($file)){
            unlink($file);
          }
        }
        
      }

}
