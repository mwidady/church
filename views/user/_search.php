<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\UserSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="user-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'first_name') ?>

    <?= $form->field($model, 'middle_name') ?>

    <?= $form->field($model, 'last_name') ?>

    <?= $form->field($model, 'designation') ?>

    <?php // echo $form->field($model, 'denomination') ?>

    <?php // echo $form->field($model, 'dob') ?>

    <?php // echo $form->field($model, 'dob_region') ?>

    <?php // echo $form->field($model, 'dob_district') ?>

    <?php // echo $form->field($model, 'is_baptized') ?>

    <?php // echo $form->field($model, 'marital_status') ?>

    <?php // echo $form->field($model, 'confirmation') ?>

    <?php // echo $form->field($model, 'marriage_type') ?>

    <?php // echo $form->field($model, 'spouse_name') ?>

    <?php // echo $form->field($model, 'is_join_table') ?>

    <?php // echo $form->field($model, 'street_join') ?>

    <?php // echo $form->field($model, 'church_elder') ?>

    <?php // echo $form->field($model, 'occupation') ?>

    <?php // echo $form->field($model, 'occupation_place') ?>

    <?php // echo $form->field($model, 'designation_designation') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'next_of_kin_phone') ?>

    <?php // echo $form->field($model, 'home_congregation') ?>

    <?php // echo $form->field($model, 'center_id') ?>

    <?php // echo $form->field($model, 'password') ?>

    <?php // echo $form->field($model, 'authKey') ?>

    <?php // echo $form->field($model, 'password_reset_token') ?>

    <?php // echo $form->field($model, 'user_image') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
