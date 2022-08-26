<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Sizes */
/* @var $form yii\widgets\ActiveForm */
?>






<div class="sizes-form">
    

    <?php $form = ActiveForm::begin(); ?>

    <div class="col-md-6">
        <?= $form->field($model, 'size_number') 
            ->textInput(
                ['required'=>true , 
                'placeholder'=>'Enter size number ',
                'maxlength' => 5,
                ]
            )
        ?>  
    </div>
    <div class="col-md-6">
        <?= $form->field($model, 'status')
            ->dropDownList(
                ['1' => 'Active', '0' => 'Inactive'], 
                ['prompt' => 'Select Status']
            ) 
        ?>  
    </div>
    


    




    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success'])

        
        ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
