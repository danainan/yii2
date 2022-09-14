<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Studio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="studio-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'studio_name') ?>

    <?= $form->field($model, 'studio_img') ?>

    <?= $form->field($model, 'details') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
