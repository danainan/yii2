<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PersonalInfo */

$this->title = $model->firstname . ' ' . $model->lastname;
$this->params['breadcrumbs'][] = ['label' => 'Personal Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="personal-info-view">

    
    <style>
        .icon-box.medium {
            font-size: 20px;
            width: 50px;
            height: 50px;
            line-height: 50px;
        }

        .icon-box {
            font-size: 30px;
            margin-bottom: 33px;
            display: inline-block;
            color: #ffffff;
            height: 65px;
            width: 65px;
            line-height: 65px;
            background-color: #59b73f;
            text-align: center;
            border-radius: 0.3rem;
        }

        .icon-box2 {
            font-size: 20px;
            margin-bottom: 33px;
            display: inline-block;
            color: #ffffff;
            height: 40px;
            width: 200px;
            line-height: 40px;
            background-color: #59b73f;
            text-align: center;
            border-radius: 0.3rem;

        }


        .social-icon-style2 li a {
            display: inline-block;
            font-size: 14px;
            text-align: center;
            color: #ffffff;
            background: #59b73f;
            height: 41px;
            line-height: 41px;
            width: 41px;
        }

        .rounded-3 {
            border-radius: 0.3rem !important;
        }

        .social-icon-style2 {
            margin-bottom: 0;
            display: inline-block;
            padding-left: 10px;
            list-style: none;
        }

        .social-icon-style2 li {
            vertical-align: middle;
            display: inline-block;
            margin-right: 5px;
        }

        a,
        a:active,
        a:focus {
            color: #616161;
            text-decoration: none;
            transition-timing-function: ease-in-out;
            -ms-transition-timing-function: ease-in-out;
            -moz-transition-timing-function: ease-in-out;
            -webkit-transition-timing-function: ease-in-out;
            -o-transition-timing-function: ease-in-out;
            transition-duration: .2s;
            -ms-transition-duration: .2s;
            -moz-transition-duration: .2s;
            -webkit-transition-duration: .2s;
            -o-transition-duration: .2s;
        }

        .text-secondary,
        .text-secondary-hover:hover {
            color: #59b73f !important;
        }

        .display-25 {
            font-size: 1.4rem;
        }

        .text-primary,
        .text-primary-hover:hover {
            color: #ff712a !important;
        }

        p {
            margin: 0 0 20px;
        }

        .mb-1-6,
        .my-1-6 {
            margin-bottom: 1.6rem;
        }

        .array_border {
            padding: 7px;
            border-radius: 9px;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;
        }

        .edit_button {
            display: inline-block;
            font-size: 20px;
            text-align: center;
            color: #ffffff;
            background: #009578;
            height: 100px;
            line-height: 100px;
            width: 250px;
            border: none;
            border-radius: 0.5rem;
            overflow: hidden;
            font-family: 'Roboto', sans-serif;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            cursor: pointer;
        }

        .edit_button:hover {
            background: #00a8a8;

        }

        .edit_button:active {
            background: #00a8a8;

        }

        .delete_button {
            display: inline-block;
            font-size: 20px;
            text-align: center;
            color: #ffffff;
            background: #d11a2a;
            height: 100px;
            line-height: 100px;
            width: 250px;
            border: none;
            border-radius: 0.5rem;
            overflow: hidden;
            font-family: 'Roboto', sans-serif;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            cursor: pointer;
        }

        .delete_button:hover {
            background: #D15963;

        }

        .delete_button:active {
            background: #D15963;

        }
    </style>

    <div>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ti-icons@0.1.2/css/themify-icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-lg-4 mb-5 mb-lg-1 wow fadeIn">
                    <div class="card border-0 shadow h-100">
                        <img src="<?= $model->image_url ?>" alt="...">
                        <div class="card-body p-1-9 p-xl-5 mb-5">
                            <div class="mb-5">
                                <h3 class="text-primary h3 mb-0 "><?= $model->firstname ?></h3>
                                <span class="text-primary h3 mb-0 "><?= $model->lastname ?></span>
                                <span class="h5">(<?= $model->nickname ?>)</span>
                            </div>

                            <ul class="list-unstyled mb-4">
                                <li class="mb-4"><a href="mailto:<?= $model->e_mail ?>"><i class="far fa-envelope display-25 me-3 text-secondary col-1"></i><?= $model->e_mail ?></a></li>
                                <li class="mb-4"><a href="tel:<?= $model->phone ?>"><i class="fas fa-mobile-alt display-25 me-3 text-secondary col-2"></i><?= $model->phone ?></a></li>
                                <li class="mb-4"><a href="https://line.me/ti/p/~<?= $model->line ?>"><i class="fab fa-line display-25 me-3 text-secondary col-2"></i><?= $model->line ?></a></li>
                                <li class="mb-4"><a href="https://www.instagram.com/<?= $model->instragram ?>"><i class="fab fa-instagram display-25 me-3 text-secondary col-2"></i><?= $model->instragram ?></a></li>
                                <li class="mb-4 text-truncate"><a href="<?= $model->facebook ?>"><i class="fab fa-facebook-f display-25 me-3 text-secondary col-2"></i><?= $model->facebook ?></a></li>

                            </ul>
                            <div class="mb-3 pt-2">
                                <?= Html::a('edit', ['update', '_id' => (string) $model->_id], ['class' => 'edit_button']) ?>
                                <?= Html::a('Delete', ['delete', '_id' => (string) $model->_id], [
                                    'class' => 'delete_button',
                                    'data' => [
                                        'confirm' => 'Are you sure you want to delete this item?',
                                        'method' => 'post',
                                    ],
                                ]) ?>

                            </div>

                        </div>

                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="ps-lg-1-6 ps-xl-7">

                        <div class="text-start mb-1-6 wow fadeIn">
                            <h2 class="mb-0 text-primary">#Infomation</h2>
                        </div>
                        <div class="row mt-4 ">
                            <div class="col-6 col-xl-4 mt-4">
                                <div class="card text-center border-0 rounded-3">
                                    <div class="card-body">
                                        <i class="fa-solid fa-image-portrait icon-box medium rounded-3 mb-2"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 mt-4">
                                <span class="font-weight-light ">Full Name </span><br />
                                <span class="font-weight-light ">Nickname </span><br />
                                <span class="font-weight-light ">Date Of Birth</span><br />
                                <span class="font-weight-light ">Age </span><br />
                                <span class="font-weight-light ">Gender </span><br />
                            </div>
                            <div class="col-4 mt-4">
                                <span class="font-weight-bold "><?= $model->firstname . ' ' . $model->lastname ?></span>
                                <span class="font-weight-bold "><?= $model->nickname ?></span><br />
                                <span class="font-weight-bold "><?= $model->age ?></span></br>
                                <span class="font-weight-bold "><?= $model->dob ?></span></br>
                                <span class="font-weight-bold "><?= $model->gender ?></span></br>
                            </div>
                        </div>

                        <div class="mb-2 wow fadeIn">
                            <div class="text-start mb-1-6 wow fadeIn">
                                <h2 class="mb-0 text-primary">#Education</h2>
                            </div>
                            <div class="row mt-2 ">
                                <div class="col-sm-6 col-xl-4 mt-2">
                                    <div class="card text-center border-0 rounded-3">
                                        <div class="card-body">
                                            <i class="fas fa-graduation-cap icon-box medium rounded-3 mb-2"></i>
                                            <h5>College</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <h5><?= $model->college_name ?></h5>
                                    <span class="font-italic ">Major <?= $model->majors ?></span><br />
                                    <span class="font-italic ">School Of <?= $model->school_of ?></span>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-sm-4 col-xl-4 mt-2">
                                    <div class="card text-center border-0 rounded-3">
                                        <div class="card-body">
                                            <i class="fa-solid fa-school icon-box medium rounded-3 mb-2"></i>
                                            <h5>HighSchool</h5>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 mt-2">
                                    <h5><?= $model->high_school_name ?></h5>
                                    <span class="font-italic ">Graduated on <?= $model->graduation ?></span>
                                </div>
                            </div>


                        </div>
                        <?php
                        $food_array = $model->food;
                        $food_array = explode(',', $food_array);

                        $color_array = $model->color;
                        $color_array = explode(',', $color_array);

                        $sport_array = $model->sport;
                        $sport_array = explode(',', $sport_array);

                        $comlangs_array = $model->com_langs;
                        $comlangs_array = explode(',', $comlangs_array);

                        $database_array = $model->database;
                        $database_array = explode(',', $database_array);

                        $course_array = $model->course;
                        $course_array = explode(',', $course_array);

                        $langs_array = $model->langs;
                        $langs_array = explode(',', $langs_array);

                        ?>


                        <div class="mt-2 wow fadeIn">
                            <div class="text-start mb-1-6 wow fadeIn">
                                <h2 class="mb-0 text-primary">#Interests</h2>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-xl-4 mt-2">
                                    <div class="card text-center border-0 rounded-3">
                                        <div class="card-body">
                                            <i class="fa-solid fa-brush icon-box medium rounded-3 mb-4"></i>
                                            <h5>Colors</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 mt-5">
                                    <?php foreach ($color_array as $color) : ?>
                                        <label class="array_border"><?= $color ?></label>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6 col-xl-4 mt-2">
                                    <div class="card text-center border-0 rounded-3">
                                        <div class="card-body">
                                            <i class="fa-solid fa-burger icon-box medium rounded-3 mb-4"></i>
                                            <h5>Foods</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 mt-5">
                                    <?php foreach ($food_array as $food) : ?>
                                        <label class="array_border"><?= $food ?></label>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6 col-xl-4 mt-2">
                                    <div class="card text-center border-0 rounded-3">
                                        <div class="card-body">
                                            <i class="fa-solid fa-baseball icon-box medium rounded-3 mb-4"></i>
                                            <h5>Sports</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 mt-5">
                                    <?php foreach ($sport_array as $sport) : ?>
                                        <label class="array_border"><?= $sport ?></label>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-2 wow fadeIn">
                <div class="text-start mb-1-6 wow fadeIn">
                    <h2 class="mb-0 text-primary">#Experience</h2>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-xl-4 mt-2">
                        <div class="card text-center border-0 rounded-3">
                            <div class="card-body">
                                <i class="fa-solid fa-code icon-box medium rounded-3 mb-4"></i>
                                <h5>Programming Language</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mt-5">
                        <?php foreach ($comlangs_array as $comlangs) : ?>
                            <label class="array_border"><?= $comlangs ?></label>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 col-xl-4 mt-2">
                        <div class="card text-center border-0 rounded-3">
                            <div class="card-body">
                                <i class="fa-solid fa-database icon-box medium rounded-3 mb-4"></i>
                                <h5>Database</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mt-5">
                        <?php foreach ($database_array as $database) : ?>
                            <label class="array_border"><?= $database ?></label>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 col-xl-4 mt-2">
                        <div class="card text-center border-0 rounded-3">
                            <div class="card-body">
                                <i class="fa-solid fa-language icon-box medium rounded-3 mb-4"></i>
                                <h5>Languages</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mt-5">
                        <?php foreach ($langs_array as $langs) : ?>
                            <label class="array_border"><?= $langs ?></label>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 col-xl-4 mt-2">
                        <div class="card text-center border-0 rounded-3">
                            <div class="card-body">
                                <i class="fa-solid fa-book icon-box medium rounded-3 mb-4"></i>
                                <h5>Course</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mt-5">
                        <?php foreach ($course_array as $course) : ?>
                            <label class="array_border"><?= $course ?></label>
                        <?php endforeach; ?>
                    </div>
                </div>



            </div>
        </div>









        <!-- 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            '_id',
            'image_url',
            'firstname',
            'lastname',
            'nickname',
            'age',
            'dob',
            'gender',
            'high_school_name',
            'graduation',
            'college_name',
            'majors',
            'school_of',
            'color',
            'food',
            'sport',
            'com_langs',
            'database',
            'course',
            'langs',
            'facebook',
            'line',
            'instragram',
            'e_mail',
            'phone',
        ],
    ]) ?> -->

    </div>