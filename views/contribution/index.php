<?php

use app\models\Contribution;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\ContributionSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Matoleo';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contribution-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'label' => 'Msharika',
                'value' => function ($data) {
                        return $data->user->first_name . " " . $data->user->last_name;
                    }

            ],
            'contributionsType.name',
            'amount',
            'date_of_payment',
            'payment_mode',
            'reference_no',
            //'payment_desc:ntext',
            //'channel_name',
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update}',
                'buttons' => [
                    'view' => function ($url, $model) {
                            return Html::a(
                                '<span class="glyphicon glyphicon-eye-open">Onesha</span>',
                                $url,
                                [
                                    'title' => 'View',
                                    'class' => 'btn btn-primary btn-xs',
                                ]
                            );
                        },
                    'update' => function ($url, $model) {
                            return Html::a(
                                '<span class="glyphicon glyphicon-pencil">Badili</span>',
                                $url,
                                [
                                    'title' => 'Update',
                                    'class' => 'btn btn-info btn-xs',
                                ]
                            );
                        },

                ],
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>