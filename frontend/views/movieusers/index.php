<?php

use app\models\Movieusers;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MovieusersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Movieusers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="movieusers-index">
    <p>
        <?= Html::a('Create Movieusers', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

<div class="cart_section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cart_container">
                    <div class="cart_title">
                        <span>User Info</span>


                    </div>


                    <div class="cart_items">
                        <?php foreach ($user as $model) {

                            var_dump($model);
                            // $users = Movieusers::findOne(new MongoDB\BSON\ObjectID($model->_id));
                            
                        ?>

                            <ul class="cart_list">
                                <li class="cart_item clearfix">
                                    <div class="cart_item_image"><img src="<?= $users->user_img ?>" alt=""></div>
                                    <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                                        <div class="col-4">
                                            <div class="cart_item_title">Name test by iffan</div>
                                            <td class="cart_item_text"><?= $users->usernames ?></td>
                                        </div>
                                        <div class="col-4">
                                            <div class="cart_item_title">Email</div>
                                            <td class="cart_item_text"><?= $users->email ?></td>
                                        </div>
                                        <div class="col-4">
                                            <div class="cart_item_title">Phone</div>
                                            <td class="cart_item_text"><?= $users->phone ?></td>
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
</div>


</div>
