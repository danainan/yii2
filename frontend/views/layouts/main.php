<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    
    <link rel="shortcut icon" href="holdem.png" type="image/x-icon">
    <link href="../../theme/assets/css/theme.css" rel="stylesheet" />
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
</head>

<body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>
    
    <header>
        <?php
        NavBar::begin([
            // 'brandLabel' => Yii::$app->name,
            'brandUrl' => Yii::$app->homeUrl,

            'options' => [
                'class' => 'navbar navbar-md navbar-light fixed-top',
                'style' => 'background-color:  #F7F3EE;box-shadow: 0px 0px 10px #888888;',




            ],

            'brandLabel' => '
                        <span class="col-md-12">Holdem Shop</span>
                        <span class="float-left"><img src="holdem.png" style="width:38px;"/></span>
                        
                        <div class="row"/>',
        ]);
        $menuItems = [
            ['label' => 'Home', 'url' => ['/site/index'], 'linkOptions' => ['class' => 'font-weight-bold']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            ['label' => 'Personal-Infos', 'url' => ['/personal-info/index']],
        ];
        if (Yii::$app->user->isGuest) {
            $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
            $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
        } else {
            $menuItems[] =  ['label' => 'Cart', 'url' => ['/cart/index']];
            $menuItems[] = '<li>'
                . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',

                    [
                        'class' => 'btn btn-link logout',
                        'style' => 'color: black;'
                    ]

                )
                . Html::endForm()
                . '</li>';
        }
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav ml-auto'],
            'items' => $menuItems,
        ]);
        NavBar::end();
        ?>
    </header>

    <main role="main" class="flex-shrink-0" style="background-color: #F7F3EE; font-family: Roboto, Kanit, sans-serif">
        <div class="container" >
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>


            <?=\yii2mod\alert\Alert::widget()?>
            <?= $content ?>
        </div>
    </main>

    <footer class="footer mt-auto py-3 text-muted">
        <div class="container">
            <p class="float-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>
            <p class="float-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>


</html>
<?php $this->endPage();

