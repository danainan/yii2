<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Bookmark */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bookmark-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'movie_id') ?>

    <?= $form->field($model, 'user_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
