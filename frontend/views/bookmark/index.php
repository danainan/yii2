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
        width: 133px;
        height: 133px;
        float: left;
        padding-top: 15px;

    }

    .cart_item_image img {
        max-width: 100%
    }

    .cart_item_info {
        width: calc(100% - 133px);
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

    .cart_item_text {
        font-size: 16px;
        font-weight: 500;
        width: 250px;
        float: left;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;

    }



    .cart_item_text span {
        display: inline-block;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        margin-right: 11px;
        -webkit-transform: translateY(4px);
        -moz-transform: translateY(4px);
        -ms-transform: translateY(4px);
        -o-transform: translateY(4px);
        transform: translateY(4px)
    }

    .cart_item_price {
        text-align: right
    }

    .cart_item_total {
        text-align: right
    }

    .order_total {
        width: 100%;
        height: 60px;
        margin-top: 30px;
        border: solid 1px #e8e8e8;
        box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
        padding-right: 46px;
        padding-left: 15px;
        background-color: #fff
    }

    .order_total_title {
        display: inline-block;
        font-size: 14px;
        color: rgba(0, 0, 0, 0.5);
        line-height: 60px
    }

    .order_total_amount {
        display: inline-block;
        font-size: 18px;
        font-weight: 500;
        margin-left: 26px;
        line-height: 60px
    }

    .cart_buttons {
        margin-top: 60px;
        text-align: right
    }

    .cart_button_clear {
        display: inline-block;
        border: none;
        font-size: 18px;
        font-weight: 400;
        line-height: 48px;
        color: rgba(0, 0, 0, 0.5);
        background: #FFFFFF;
        border: solid 1px #b2b2b2;
        padding-left: 35px;
        padding-right: 35px;
        outline: none;
        cursor: pointer;
        margin-right: 26px
    }

    .cart_button_clear:hover {
        border-color: #0e8ce4;
        color: #0e8ce4
    }

    .cart_button_checkout {
        display: inline-block;
        border: none;
        font-size: 18px;
        font-weight: 400;
        line-height: 48px;
        color: #FFFFFF;
        padding-left: 35px;
        padding-right: 35px;
        outline: none;
        cursor: pointer;
        vertical-align: top
    }
</style>



<div class="cart_section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cart_container">
                    <div class="cart_title">
                        <span>Shopping Cart</span>


                    </div>


                    <div class="cart_items">
                        <?php foreach ($bookmark as $model) {


                            $movie = Movies::findOne(new MongoDB\BSON\ObjectID($model->movie_id));
                        ?>

                            <ul class="cart_list">
                                <li class="cart_item clearfix">
                                    <div class="cart_item_image"><img src="<?= $movie->photoViewer ?>" alt=""></div>
                                    <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
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

                                </li>


                            </ul>


                        <?php


                        } ?>
                        



                    </div>
            


                </div>
            </div>
        </div>
    </div>
</div>
