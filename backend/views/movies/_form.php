<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Moviecategories;
use yii\models\Years ;
use yii\helpers\ArrayHelper;


/* @var $this yii\web\View */
/* @var $model app\models\Movies */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="movies-form">

    <?php $form = ActiveForm::begin([
        'options' => ['enctype' => 'multipart/form-data']
    ]); ?>

    <?= $form->field($model, 'movies_name') ?>

    <div class="row">
      <div class="col-md-2">
        <div class="well text-center">
          <?= Html::img($model->getPhotoViewer(),['style'=>'width:100px;','class'=>'img-rounded']); ?>
        </div>
      </div>
      <div class="col-md-10">
            <?= $form->field($model, 'movies_img')->fileInput() ?>
      </div>
    </div>

    <?= $form->field($model, 'descriptions')->textarea(['rows' => 5]) ?>

    <?php $moviescategories = ArrayHelper::map(Moviecategories::find()->all(), 'category_type', 'category_type'); ?>
    <?= $form->field($model, 'categories')->dropDownList($moviescategories) ?>           
    <?= $form->field($model, 'years') ?>

    <?= $form->field($model, 'actors') ?>

    

    <?= $form->field($model, 'movies_rate') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
