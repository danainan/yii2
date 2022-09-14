<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\moviecategories */

$this->title = 'Update Moviecategories: ' . $model->_id;
$this->params['breadcrumbs'][] = ['label' => 'Moviecategories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->_id, 'url' => ['view', '_id' => (string) $model->_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="moviecategories-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
