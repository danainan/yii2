<?php

use app\models\Bookmark;
use app\models\Movies;
use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model app\models\Movies */

$this->title = $model->movies_name;
// $this->params['breadcrumbs'][] = ['label' => 'Movies', 'url' => ['index']];
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
        transform: scale(1.05);


    }

    .img-fluid {
        max-width: 100%;
        height: auto;


    }

   

    ::-webkit-scrollbar {
        background: #162032;
        border-left: 1px solid #162032;
    }

    ::-webkit-scrollbar-thumb {
        background: #3182EE;
        border-radius: 5em;
        border: 3px solid #162032;
    }
</style>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<?php $form = ActiveForm::begin(); ?>
<div class="movies-view">

    <div class="container">

        <div class="card">
            
            <div class="row">
                <aside class="col-sm-6 border-right">
                    <article class="gallery-wrap">
                        <div class="img-big-wrap">
                            <img class="img-fluid" src="<?= $model->photoViewer ?>" alt="..." />
                        </div>
                        <div class="img-small-wrap">
                            <div class="item-gallery"> <img src="<?= $model->photoViewer ?>"> </div>
                        </div>
                    </article>
                </aside>
                <aside class="col-sm-6">
                <div>    
                    <?php
                    if (Yii::$app->user->isGuest) {
                        echo $form->field($bookmarkModel, 'movie_id')->hiddenInput(['value'=>$movie_id])->label(false);
                    }else {
                        // if (Bookmark::find()->where(['movie_id' => $movie_id])->andWhere(['user_id' => Yii::$app->user->identity->id])->exists()) {
                        //     echo Html::a('Remove from Bookmark', ['bookmark/delete', 'id' => $movie_id], [
                        //         'class' => 'btn btn-danger',
                        //         'data' => [
                        //             'confirm' => 'Are you sure you want to remove this movie from your bookmark?',
                        //             'method' => 'post',
                        //         ],
                        //     ]);
                        // } else {
                        //     echo $form->field($bookmarkModel, 'movie_id')->hiddenInput(['value'=>$movie_id])->label(false);
                        //     echo Html::submitButton('Add to Bookmark', ['class' => 'btn btn-success']);
                        // }
                        

                        if (Bookmark::find()->where(['user_id' => (String)Yii::$app->user->identity->id])->andWhere(['movie_id' => $movie_id])->exists()) {

                           
                            
                            echo '<button class="btn btn-danger mt-3 " disabled><i class="fa-regular fa-bookmark "></i></button>';
                           
                            
                            

                        } else {
                            
                            echo '<button class="btn btn-warning mt-3"><i class="fa-regular fa-bookmark "></i></button>';
                            echo $form->field($bookmarkModel, 'movie_id')->hiddenInput(['value'=>$movie_id])->label(false);
                            echo $form->field($bookmarkModel, 'user_id')->hiddenInput(['value'=>Yii::$app->user->identity->id])->label(false);
                        }
                        
                        
                    }
                    ?>
                </div>
                    <article class="card-body p-5">
                        
                        <h3 class="title mb-3"><?= Html::encode($this->title) ?></h3>
                        <dl class="item-property">
                            
                            <dd><p><?= $model->movies_rate ?></p>
                            
                            
                        </dl>
                        <dl class="item-property">
                            <dt>Description</dt>
                            <dd><p><?= $model->descriptions ?></p></dd>
                        </dl>
                        <dl class="param param-feature">
                            <dt>Genre</dt>
                            <dd><?= $model->categories ?></dd>
                        </dl>
                        <dl class="item-property">
                            <dt>Years</dt>
                            <dd><p><?= $model->years ?></p></dd>
                        </dl>
                        <dl class="param param-feature">
                            <dt>Director</dt>
                            <dd><?= $model->actors ?></dd>
                        </dl>



            </div>
        </div>
        <hr>



        </article>
        </aside>
    </div>
</div>


</div>



<br><br><br>






</div>
<?php $form = ActiveForm::end(); ?>