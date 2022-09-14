<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Studio */

$this->title = 'Create Studio';
$this->params['breadcrumbs'][] = ['label' => 'Studios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="studio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
