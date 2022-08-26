<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ColorsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Colors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="colors-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Colors', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // '_id',
            'color_name',
            // 'color_code',
            // [
            //     'attribute' => 'color_code',
            //     'format'=>'raw',
            //     'value'=>function($model){
            //         return ' '.$model->color_code.' <div style="background-color:'.$model->color_code.';width:20px;height:20px;"></div>';
            //     }

            // ],
            [
                'attribute' => 'color_code',
                'format'=>'raw',
                'headerOptions' => ['class' => 'text-center'],
                'value'=>function($model){
                    return ' 
                        <div class="row">
                                <div class="col-md-6">
                                    <div> '.$model->color_code.'</div>
                                </div>
                                <div class="col-md-6">
                                    <div style="background-color:'.$model->color_code.';width:20px;height:20px;border: 0.01rem solid;">
                                </div>
                        </div>
                    
                    ';
                }

            ],
            
            [
                'attribute' => 'status',
                'format' => 'raw',
                'headerOptions' => ['class' => 'text-center'],
                'contentOptions' => ['class' => 'text-center'],
                'value' => function($model) {
                    return $model->status == 1 ? '<button type="button" class="btn-success" disabled>Active</button>' : 
                    '<button type="button" class="btn-light" disabled>Inactive</button>';
                }
                // 'value' => function ($model) {
                //     return $model->status == 1 ? 'Active' : 'Inactive';
                //   }
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
