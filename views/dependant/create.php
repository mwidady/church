<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Dependant $model */

$this->title = 'Sajiri Tegemezi';
$this->params['breadcrumbs'][] = ['label' => 'Tegemezi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dependant-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
