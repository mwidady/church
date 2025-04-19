<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\District $model */

$this->title = 'Badili Wilaya: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Wilaya', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Badili';
?>
<div class="district-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>