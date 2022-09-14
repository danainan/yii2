<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\moviecategories */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="moviecategories-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'category_type') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
