<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\ContributionsType $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Aina ya Matoleo', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="contributions-type-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Badili', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Futa', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'name',
            'description:ntext',
        ],
    ]) ?>

</div>