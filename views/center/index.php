<?php

use app\models\Center;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\CenterSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Sharika';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="center-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Sajiri Shariki', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //   'id',
            'name',
            'address',
            'district.name',
            'email:email',
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update}',
                'buttons' => [
                    'view' => function ($url, $model) {
                            return Html::a(
                                '<span class="glyphicon glyphicon-eye-open">Onesha</span>',
                                $url,
                                [
                                    'title' => 'Onesha',
                                    'class' => 'btn btn-primary btn-xs',
                                ]
                            );
                        },
                    'update' => function ($url, $model) {
                            return Html::a(
                                '<span class="glyphicon glyphicon-pencil">Badili</span>',
                                $url,
                                [
                                    'title' => 'Onesha',
                                    'class' => 'btn btn-info btn-xs',
                                ]
                            );
                        },

                ],
            ],
        ],
    ]); ?>


</div>