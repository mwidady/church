<?php


/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\LoginForm $model */


// use yii\bootstrap5\Html;
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

Html::beginForm('/logout');
Html::a('Logout', '#', ['data-confirm' => 'Are you sure?']);
Html::endForm();
?>


<div class="login-form">
    <h2>Kuingia</h2>
    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'class' => 'clearfix',
        'fieldConfig' => [
            'template' => "{label}\n{input}\n{error}",
            'labelOptions' => ['class' => 'col-lg-3 col-form-label mr-lg-3'],
            'inputOptions' => ['class' => 'col-lg-3 form-control'],
            'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
        ],
    ]); ?>
    <div class="col-md-12">
        <label for="form_username_email" class="row">
            Barua Pepe
        </label>
        <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label(false) ?>
    </div>

    <div class="col-md-12">
        <label for="form_password" class="row">
            Nywira
        </label>
        <?= $form->field($model, 'password')->passwordInput()->label(false) ?>
    </div>
    <div class="row">
        <div class="col-md-6 checkbox pull-left mt-10">
            <label for="form_checkbox">
                <!-- Remember me  -->
                <?= $form->field($model, 'rememberMe')
                    ->checkbox([
                        'template' => "<div class=\"offset-lg-1 col-lg-10 custom-control custom-checkbox\">{input} {label}</div>
                  \n<div class=\"col-lg-10\">{error}</div>"
                    ])->label('Kumbuka')
                    ?>
            </label>
        </div>

        <div class="col-md-6 form-group pull-right mt-1">
            <?= Html::submitButton(
                'Ingia',
                [
                    'class' => 'btn btn-dark btn-sm',
                    'name' => 'login-button',
                    'style' => 'margin-right:10px;'
                ]
            ) ?>
        </div>
    </div>

    <div class="clear text-center pt-10">
        <a class="text-theme-colored font-weight-600 font-12" href="#">Je Umesahau Nywira Yako?</a>
    </div>
    <?php ActiveForm::end(); ?>
</div>