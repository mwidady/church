<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Dependant $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tegemezi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="dependant-view">

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
            [
                'label' => 'Jina Kamili',
                'value' => $model->first_name . " " . $model->middle_name . " " . $model->last_name,
            ],
            'dob',
            [
                'label' => 'Jina Kamili la Anaemtegemea',
                'value' => $model->user->first_name . " " . $model->user->middle_name . " " . $model->user->last_name,
            ],
            'dependant_type',
            'is_budtized',
            'occupation',
        ],
    ]) ?>

</div>