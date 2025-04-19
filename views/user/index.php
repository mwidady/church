<?php

use app\models\User;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\UserSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Washarika';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Sajiri Msharika', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'first_name',
            // 'middle_name',
            'last_name',
           // 'designation',
            //'denomination',
            'dob',
            //'dob_region',
            //'dob_district',
            //'is_baptized',
            //'marital_status',
            //'confirmation',
            //'marriage_type',
            //'spouse_name',
            //'is_join_table',
            //'street_join',
            //'church_elder',
            //'occupation',
            //'occupation_place',
            //'designation_designation',
            'phone',
           // 'email:email',
            //'next_of_kin_phone',
            //'home_congregation',
            'center.name',
            //'status',
            //'updated_at',
            //'created_at',
            //'created_by',
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