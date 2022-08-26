<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PersonalInfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Personal Infos';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="personal-info-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Personal Info', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // '_id',
            // 'image_url',
            'firstname',
            'lastname',
            'nickname',
            //'age',
            //'dob',
            //'gender',
            //'high_school_name',
            //'graduation',
            //'college_name',
            //'majors',
            //'school_of',
            //'color',
            //'food',
            //'sport',
            //'com_langs',
            //'database',
            //'course',
            //'langs',
            //'facebook',
            //'line',
            //'instragram',
            //'e_mail',
            //'phone',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, $model, $key, $index, $column) {
                    return Url::toRoute([$action, '_id' => (string) $model->_id]);
                 }
            ],
        ],
    ]); ?>


</div>
