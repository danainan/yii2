<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Years */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="years-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'years') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
