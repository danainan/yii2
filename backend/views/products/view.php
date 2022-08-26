<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Products */

$this->title = $model->_id;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="products-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', '_id' => (string) $model->_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', '_id' => (string) $model->_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            '_id',
            'product_name',
            'image_url:url',
            [
                'attribute' => 'Image',
                'format' => ['image', ['width' => '50', 'height' => '50']],
                'value' => function ($model) {
                    return $model->image_url;
                }
            
            ],
            
            [
                'attribute' => 'sizes',
                'value' => implode(', ', $model->sizes),
            ],
            [
                'attribute' => 'colors',
                'value' => implode(', ', $model->colors),
            ],


            
            'price',
            [
                'attribute' => 'status',
                'format' => 'raw',
                'value' => function($model) {
                    return $model->status == 1 ? '<button type="button" class="btn-success" disabled>Active</button>' : 
                    '<button type="button" class="btn-light" disabled>Inactive</button>';
                    
                },
            ]
        ],

    ]) ?>




</div>
