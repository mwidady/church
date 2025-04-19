<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Contribution $model */

$this->title = 'Badili Matoleo: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Contributions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="contribution-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'paymentType' => $paymentType,
        'paymentChannel' => $paymentChannel
    ]) ?>

</div>
