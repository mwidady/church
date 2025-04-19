<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Contribution $model */

$this->title = 'Sajili Matoleo';
$this->params['breadcrumbs'][] = ['label' => 'Matoleo', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contribution-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'paymentType' => $paymentType,
        'paymentChannel' => $paymentChannel
    ]) ?>

</div>
