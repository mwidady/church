<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ContributionsType $model */

$this->title = 'Badili Aina ya Matoleo: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Aina ya Matoleo', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="contributions-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>