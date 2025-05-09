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
    <p>
        <?= Html::a('Sajiri Matoleo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php
     Pjax::begin(); 
     $totalAmount = $dataProvider->query->sum('amount');
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'showFooter' => true,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'contributionsType.name',
            'date_of_payment',
            'payment_mode',
            'reference_no',
            [
                'attribute' => 'amount',
                'footer' => Yii::$app->formatter->asDecimal($totalAmount, 2),
            ],
            
            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Kitendo', // ← This sets the label
                'headerOptions' => ['style' => 'text-align: center;'], // optional
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