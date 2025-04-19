<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Region $model */

$this->title = 'Badili Mkoa: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Mikoa', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Badili';
?>
<div class="region-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>