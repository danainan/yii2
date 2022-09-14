<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MoviesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="movies-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, '_id') ?>

    <?= $form->field($model, 'movies_name') ?>

    <?= $form->field($model, 'movies_img') ?>

    <?= $form->field($model, 'descriptions') ?>

    <?= $form->field($model, 'categories') ?>

    <?php // echo $form->field($model, 'actors') ?>

    <?php // echo $form->field($model, 'years') ?>

    <?php // echo $form->field($model, 'movies_rate') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
