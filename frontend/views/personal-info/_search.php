<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PersonalInfoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="personal-info-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, '_id') ?>

    <?= $form->field($model, 'image_url') ?>

    <?= $form->field($model, 'firstname') ?>

    <?= $form->field($model, 'lastname') ?>

    <?= $form->field($model, 'nickname') ?>

    <?php // echo $form->field($model, 'age') ?>

    <?php // echo $form->field($model, 'dob') ?>

    <?php // echo $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'high_school_name') ?>

    <?php // echo $form->field($model, 'graduation') ?>

    <?php // echo $form->field($model, 'college_name') ?>

    <?php // echo $form->field($model, 'majors') ?>

    <?php // echo $form->field($model, 'school_of') ?>

    <?php // echo $form->field($model, 'color') ?>

    <?php // echo $form->field($model, 'food') ?>

    <?php // echo $form->field($model, 'sport') ?>

    <?php // echo $form->field($model, 'com_langs') ?>

    <?php // echo $form->field($model, 'database') ?>

    <?php // echo $form->field($model, 'course') ?>

    <?php // echo $form->field($model, 'langs') ?>

    <?php // echo $form->field($model, 'facebook') ?>

    <?php // echo $form->field($model, 'line') ?>

    <?php // echo $form->field($model, 'instragram') ?>

    <?php // echo $form->field($model, 'e_mail') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
