<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Movies */

$this->title = $model->_id;
$this->params['breadcrumbs'][] = ['label' => 'Movies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<style>
    .gallery-wrap .img-big-wrap img {
        padding: 20px 20px 20px 20px;
        display: inline-block;
        cursor: zoom-in;
        transition: all .3s ease-in-out;
        box-shadow: 0 0 1px 10px rgba(0, 0, 0, 0.1);
    }


    .gallery-wrap .img-small-wrap .item-gallery {
        width: 60px;
        margin: 7px 2px;
        display: inline-block;
        overflow: hidden;
    }

    .gallery-wrap .img-small-wrap {
        text-align: center;
    }

    .gallery-wrap .img-small-wrap img {
        max-width: 100%;
        max-height: 100%;
        object-fit: cover;
        border-radius: 4px;
        cursor: zoom-in;
    }
    .gallery-wrap .img-big-wrap img:hover {
        transform: scale(1.1);
        
        
    }
</style>
<?php $form = ActiveForm::begin(); ?>
<div class="movies-view">

<div class="container">

    <div class="card">
        <div class="row">
            <aside class="col-sm-6 border-right">
                <article class="gallery-wrap">
                    <div class="img-big-wrap">
                        <img class="img-fluid h-100" src="<?= $model->image_url ?>" alt="..." />
                    </div> <!-- slider-product.// -->
                    <div class="img-small-wrap">
                        <div class="item-gallery"> <img src="<?= $model->image_url ?>"> </div>
                    </div> <!-- slider-nav.// -->
                </article> <!-- gallery-wrap .end// -->
            </aside>
            <aside class="col-sm-6">
                <article class="card-body p-5">
                    <h3 class="title mb-3"><?= Html::encode($this->title) ?></h3>

                    <p class="price-detail-wrap">
                        <span class="price h2 text-primary">
                            <span class="currency">฿</span><span class="num"><?= $model->price ?></span>
                        </span>
                    </p>
                    <dl class="param param-feature">
                        <dt>Color</dt>
                        <?php 
                            $colors = [];
                            foreach ($model->colors as $color) {
                                $colors[$color] = $color;
                            }
                            echo $form->field($cartModel, 'color')->radioList($colors)->label(false);
                        ?>
                    </dl> <!-- item-property-hor .// -->

                    <hr>
                    <div class="row">
                        
                        <div class="col-sm-7">
                            <dl class="param param-inline">
                                <dt>Size: </dt>

                                <?php
                                    $sizes = [];
                                    foreach ($model->sizes as $size) {
                                        $sizes[$size] = $size;
                                    } 
                                    echo $form->field($cartModel, 'size')->radioList($sizes)->label(false);
                                ?>

                            </dl> <!-- item-property .// -->
                        </div> <!-- col.// -->
                    </div> <!-- row.// -->
                    <hr>
                    <?php 
                        echo $form->field($cartModel, 'product_id')->hiddenInput(['value'=>$product_id])->label(false);
                        echo $form->field($cartModel, 'price')->hiddenInput(['value'=>$model->price])->label(false);
                        echo $form->field($cartModel, 'user_id')->hiddenInput(['value'=>Yii::$app->user->identity->id])->label(false);
                        echo $form->field($cartModel, 'quantity')->hiddenInput(['value'=>1])->label(false);
                    ?>
                    <?= Html::submitButton('Add to cart', ['class' => 'btn btn-lg btn-outline-primary text-uppercase']) 
                        
                    ?>



                </article> <!-- card-body.// -->
            </aside> <!-- col.// -->
        </div> <!-- row.// -->
    </div> <!-- card.// -->


</div>
<!--container.//-->


<br><br><br>






</div>
<?php $form = ActiveForm::end(); ?>
