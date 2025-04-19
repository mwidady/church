<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\User $model */

$this->title = 'Sajiri Msharika';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'maritalStatus' => $maritalStatus,
        'trueFalse' => $trueFalse,
        'gender' => $gender,
        'mariageType' => $mariageType
    ]) ?>

</div>