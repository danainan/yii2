<?php

use app\models\Movies;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Bookmark;




/* @var $this yii\web\View */
/* @var $searchModel app\models\BookmarkSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bookmarks';
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    * {
        margin: 0;
        padding: 0;
        -webkit-font-smoothing: antialiased;
        -webkit-text-shadow: rgba(0, 0, 0, .01) 0 0 1px;
        text-shadow: rgba(0, 0, 0, .01) 0 0 1px
    }


    ul {
        list-style: none;
        margin-bottom: 0px
    }

    .button {
        display: inline-block;
        background: #0e8ce4;
        border-radius: 5px;
        height: 48px;
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 200ms ease
    }

    .button a {
        display: block;
        font-size: 18px;
        font-weight: 400;
        line-height: 48px;
        color: #FFFFFF;
        padding-left: 35px;
        padding-right: 35px
    }

    .button:hover {
        opacity: 0.8
    }

    .cart_section {
        width: 100%;
        padding-top: 93px;
        padding-bottom: 111px
    }

    .cart_title {
        font-size: 30px;
        font-weight: 500
    }

    .cart_items {
        margin-top: 8px
    }

    .cart_list {
        border: solid 1px #e8e8e8;
        box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
        background-color: #fff
    }

    .cart_item {
        width: 100%;
        padding: 5px;

    }

    .cart_item_image {
        width: 90px;
        height: 133px;
        /* float: left; */
        /* padding-top: 15px; */
        cursor: pointer;

    }

    .cart_item_image img {
        max-width: 100%
    }

    .cart_item_info {
        /* width: calc(100% - 133px); */
        float: left;
        padding-top: 18px
    }

    .cart_item_name {
        margin-left: 7.53%
    }

    .cart_item_title {
        font-size: 14px;
        font-weight: 400;
        color: rgba(0, 0, 0, 0.5)
    }

    


    

    

    



</style>



<div class="cart_section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cart_container">
                    <div class="cart_title">
                        <span>Your Bookmarks</span>


                    </div>


                    <div class="cart_items">
                        <?php foreach ($bookmark as $model) {


                            $movie = Movies::findOne(new MongoDB\BSON\ObjectID($model->movie_id));
                        ?>

                            <div class="cart_list mb-5">
                                
                                <div class="cart_item clearfix">
                                
                                <div class="row">
                                    <div class="col-4">
                                        <a href="index.php?r=movies/view&_id=<?=$model->_id?>"><div class="cart_item_image"><img src="<?= $movie->photoViewer ?>" alt=""></div></a>

                                    </div>
                                    <div class="col-4">
                                            <div class="cart_item_title">Name </div>
                                            <td class="cart_item_text"><?= $movie->movies_name ?></td>

                                    </div>
                                    <div class="col-2">
                                            <div><?= Html::a('Delete', ['delete', '_id' => (string) $model->_id], [
                                                        'class' => 'btn btn-danger',
                                                        'data' => [
                                                            'confirm' => 'Are you sure you want to delete this item?',
                                                            'method' => 'post',

                                                        ],
                                                    ]) ?>
                                            </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                                    
                                    
                                    
                                        
                                    


                        <?php


                        } ?>




                    </div>



                </div>
            </div>
        </div>
    </div>
</div>