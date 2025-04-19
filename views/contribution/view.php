<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Contribution $model */

$this->title = "Malipo ya " . $model->user->first_name . " " . $model->user->last_name;
$this->params['breadcrumbs'][] = ['label' => 'Matoleo', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="contribution-view">

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
            // 'id',
            'user.last_name',
            'contributionsType.name',
            'amount',
            'date_of_payment',
            'payment_mode',
            'reference_no',
            'payment_desc:ntext',
            'channel_name',
        ],
    ]) ?>

</div>