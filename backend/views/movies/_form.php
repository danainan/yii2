<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Movies */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="movies-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'movies_name') ?>

    <?= $form->field($model, 'movies_img') ?>

    <?= $form->field($model, 'descriptions') ?>

    <?= $form->field($model, 'categories') ?>

    <?= $form->field($model, 'actors') ?>

    <?= $form->field($model, 'years') ?>

    <?= $form->field($model, 'movies_rate') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
