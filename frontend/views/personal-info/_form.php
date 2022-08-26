<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PersonalInfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="personal-info-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'image_url') ?>

    <?= $form->field($model, 'firstname') ?>

    <?= $form->field($model, 'lastname') ?>

    <?= $form->field($model, 'nickname') ?>

    <?= $form->field($model, 'age') ?>

    <?= $form->field($model, 'dob') ?>

    <?= $form->field($model, 'gender') ?>

    <?= $form->field($model, 'high_school_name') ?>

    <?= $form->field($model, 'graduation') ?>

    <?= $form->field($model, 'college_name') ?>

    <?= $form->field($model, 'majors') ?>

    <?= $form->field($model, 'school_of') ?>

    <?= $form->field($model, 'color') ?>

    <?= $form->field($model, 'food') ?>

    <?= $form->field($model, 'sport') ?>

    <?= $form->field($model, 'com_langs') ?>

    <?= $form->field($model, 'database') ?>

    <?= $form->field($model, 'course') ?>

    <?= $form->field($model, 'langs') ?>

    <?= $form->field($model, 'facebook') ?>

    <?= $form->field($model, 'line') ?>

    <?= $form->field($model, 'instragram') ?>

    <?= $form->field($model, 'e_mail') ?>

    <?= $form->field($model, 'phone') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
