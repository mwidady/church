<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ContributionSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="contribution-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'contribution_type_id') ?>

    <?= $form->field($model, 'amount') ?>

    <?= $form->field($model, 'date_of_payment') ?>

    <?php // echo $form->field($model, 'payment_mode') ?>

    <?php // echo $form->field($model, 'reference_no') ?>

    <?php // echo $form->field($model, 'payment_desc') ?>

    <?php // echo $form->field($model, 'channel_name') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
