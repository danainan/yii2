<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MovieusersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Movieusers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="movieusers-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Movieusers', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            '_id',
            'usernames',
            'user_img',
            'gender',
            'age',
            //'email',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Movieusers $model, $key, $index, $column) {
                    return Url::toRoute([$action, '_id' => (string) $model->_id]);
                 }
            ],
        ],
    ]); ?>


</div>
