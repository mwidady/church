<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Ripoti';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php $form = ActiveForm::begin(); ?>
    <div class="mb-3 row">

        <div class="col-md-4">

            <?= $form->field($model, 'start_date')->input('date', [
                'class' => 'form-control'
            ]) ?>
        </div>


        <div class="col-md-4">

            <?= $form->field($model, 'end_date')->input('date', [
                'class' => 'form-control'
            ]) ?>
        </div>

        <div class="col-md-4">
            <br />
            <div class="form-group">
                <?= Html::submitButton('Tafuta', ['class' => 'btn btn-success pull-right']) ?>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>


    <div class="mb-3 row">
        <div class="col-md-12">

        </div>
    </div>