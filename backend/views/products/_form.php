
<?php


use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Sizes;
use app\models\Colors;

/* @var $this yii\web\View */
/* @var $model app\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'product_name') ?>

    
    <?= $form->field($model, 'image_url')?>
   

    <?php $size_items = ArrayHelper::map(Sizes::find()->where(['status'=>'1'])->all(), 'size_number', 'size_number'); ?>

    <?= $form->field($model, 'sizes')            
        ->listBox($size_items,
         [
            'multiple' => true,
            // 'required' => true,
        ]
        )
        
    
    ?>
    <!-- ->dropDownList($size_items,
            [
            'multiple' => 'multiple',
            'style' => 'height:150px', 
            ]             
         ) -->
    
    <?php $color_items = ArrayHelper::map(Colors::find()->where(['status'=>'1'])->all(), 'color_name', 'color_name'); ?>
    


    <?= $form->field($model, 'colors')            
        ->listBox($color_items,
            [
            'multiple' => true,
            // 'required' => true,
           
            ]
            
         )
        

    ?>

   


    <?= $form->field($model, 'price') ?>

    <?= $form->field($model, 'status')
            ->dropDownList(
                ['1' => 'Active', '0' => 'Inactive',],

            )
        
            
    ?>

    
    
   

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) 
        ?>
        
    </div>

    <?php ActiveForm::end(); ?>

</div>
