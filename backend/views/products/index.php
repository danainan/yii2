<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Colors;
use yii\web\Controller;







/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;

$this->registerJs('
    jQuery("#btn-delete").click(function(){
        var keys = $("#w0").yiiGridView("getSelectedRows");
        
        if(keys.length>0){
            if(confirm("Are you sure you want to delete these items?")){
                jQuery.post("'.Url::to(['delete-all']).'",
                {ids:keys.join()},function(){});
            }else{
                return window.location.reload();
            } 
        }else{
            alert("Please select items to delete");
        }
    });

    
');




?>



    



<div class="products-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Products', ['create'], ['class' => 'btn btn-success']) ?>
        
        
        <?= Html::button(Yii::t('app', 'Delete Selected'), ['class' => 'btn btn-danger offset-md-8','id'=>'btn-delete']) ?>
        
        

    </p>

    <?php  //echo $this->render('_search', ['model' => $searchModel]); ?>

    

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //  '_id',
            

            [
                'class' => 'yii\grid\CheckBoxColumn', 
            ],
            [
                'attribute' => 'Image',
                'format' => ['image', ['width' => '50', 'height' => '50']],
                'value' => function ($model) {
                    return $model->image_url;
                }
            
            ],
            [
                'attribute' => 'product_name',
                'format'=>'raw',
                'value' => function ($model) {
                    return '<a href="' . Url::to(['products/view', '_id' => (string) $model->_id]) . '">' . $model->product_name . '</a>';
                    
                    
                }
            ],

            
           
            
            


            // 'sizes',
            // 'colors',
            // [
            //     'attribute' => 'sizes',
            //     'format' => 'raw',
            
            //     'value' => function($model) {
            //         $sizes = $model->sizes;
            //         $sizes_str = '';
            //         foreach ($sizes as $model->sizes) {
            //             $sizes_str .= $model->sizes . '<br>';
            //         }
            //         return $sizes_str;
            //     }
                
            // ],

            // [
            //     'attribute' => 'colors',
            //     'format' => 'raw',
              
            //     'value' => function($model) {
            //         $colors = $model->colors;
            //         $colors_str = '';
            //         foreach ($colors as $model->colors) {
            //             $colors_str .= $model->colors . '<br>';
            //         }
            //         return $colors_str;
            //     } 

              
            // ],

            [
                'attribute' => 'sizes',
                'format' => 'raw',
                'contentOptions' => ['class' => 'text-center'],
                'value' => function ($model){
                    return implode(", ",$model->sizes);
                },
               
            ],
            [
                'attribute' => 'colors',
                'format' => 'raw',
                'contentOptions' => ['class' => 'text-center'],
                'value' => function ($model){
                    return implode(", ",$model->colors);
                },
            ],
            

    
            

            

           
           
            
            
            'price',
            //'status',
            [
                'attribute' => 'status',
                'format' => 'raw',
                'headerOptions' => ['class' => 'text-center'],
                'contentOptions' => ['class' => 'text-center'],
                'value' => function($model) {
                    return $model->status == 1 ? '<button type="button" class="btn-success" disabled>Active</button>' : 
                    '<button type="button" class="btn-light" disabled>Inactive</button>';
                    
                },
                'filter' => [1 => 'Active', 0 => 'Inactive'],
            
                
            ],
           
            

           
            
           
    
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, $model, $key, $index, $column) {
                    return Url::toRoute([$action, '_id' => (string) $model->_id]);
                 }
            ],
            
        ],
    ]); ?>

 
</div>
