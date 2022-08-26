<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Colors */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="colors-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="col-md-4">
        <?= $form->field($model, 'color_name') 
            ->textInput(['required' => true, 'placeholder'=>'Enter color name'])
        ?>
    </div>
    <div class="col-md-4">
        <?= $form->field($model, 'color_code')
            ->input('color',['class'=>'form-control'])
            ->hint('Select Color : [Default #000000]')
        ?>
    </div>
    <div class="col-md-4">
        <?= $form->field($model, 'status')
            ->dropDownList(
                ['1' => 'Active', '0' => 'Inactive'], 
            )
        ?>

    </div>

    

    

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>



    <?php ActiveForm::end(); ?>


</div>




