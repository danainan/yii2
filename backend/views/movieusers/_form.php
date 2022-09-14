<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Movieusers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="movieusers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'usernames') ?>

    <?= $form->field($model, 'user_img') ?>

    <?= $form->field($model, 'gender') ?>

    <?= $form->field($model, 'age') ?>

    <?= $form->field($model, 'email') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
