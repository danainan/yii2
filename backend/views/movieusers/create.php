<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Movieusers */

$this->title = 'Create Movieusers';
$this->params['breadcrumbs'][] = ['label' => 'Movieusers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="movieusers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
