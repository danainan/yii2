<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\moviecategories */

$this->title = 'Create Moviecategories';
$this->params['breadcrumbs'][] = ['label' => 'Moviecategories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="moviecategories-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
