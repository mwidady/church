<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Center $model */

$this->title = 'Sajiri Sharika';
$this->params['breadcrumbs'][] = ['label' => 'Masharika', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="center-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
