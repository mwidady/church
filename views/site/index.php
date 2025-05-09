<?php
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Dashibodi';
$this->params['breadcrumbs'][] = $this->title;
?>



<div class="row">
    <!-- [ sample-page ] start -->
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <h6 class="mb-2 f-w-400 text-muted">Washirika</h6>
                <h4 class="mb-3"><?= $washarika ?> <span class="badge bg-light-primary border border-primary"><i
                            class="ti ti-trending-up"></i> 100%</span></h4>
                <p class="mb-0 text-muted text-sm"> Ongezeko la <span class="text-primary"><?= $washarika ?></span>
                    Mwaka huu
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <h6 class="mb-2 f-w-400 text-muted">Matoleo</h6>
                <h4 class="mb-3"><?= $matoleo ?> <span class="badge bg-light-success border border-success"><i
                            class="ti ti-trending-up"></i> 100%</span></h4>
                <p class="mb-0 text-muted text-sm"> Ongezeko la <span class="text-success"><?= $matoleo ?></span>
                    Mwaka huu</p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <h6 class="mb-2 f-w-400 text-muted">Tegemezi</h6>
                <h4 class="mb-3"><?= $tegemezi ?> <span class="badge bg-light-warning border border-warning"><i
                            class="ti ti-trending-down"></i> 27.4%</span></h4>
                <p class="mb-0 text-muted text-sm">Ongezeko la <span class="text-warning">1,943</span>
                    Mwaka huu</p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <h6 class="mb-2 f-w-400 text-muted">Washarika Wapya</h6>
                <h4 class="mb-3"><?= $washarika ?> <span class="badge bg-light-danger border border-danger"><i
                            class="ti ti-trending-down"></i> 27.4%</span></h4>
                <p class="mb-0 text-muted text-sm">Ongezeko la <span class="text-danger"><?= $washarika ?></span>
                    Mwaka Huu
                </p>
            </div>
        </div>
    </div>

    <div class="col-md-12 col-xl-8">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h5 class="mb-0">Idadi ya Washarika katika Kujisajiri </h5>
            <ul class="nav nav-pills justify-content-end mb-0" id="chart-tab-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="chart-tab-home-tab" data-bs-toggle="pill"
                        data-bs-target="#chart-tab-home" type="button" role="tab" aria-controls="chart-tab-home"
                        aria-selected="true">Mwaka</button>
                </li>

            </ul>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="tab-content" id="chart-tab-tabContent">
                    <div class="tab-pane  show active" id="chart-tab-home" role="tabpanel"
                        aria-labelledby="chart-tab-home-tab" tabindex="0">
                        <div id="visitor-chart-1"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-xl-4">
        <h5 class="mb-3">Mapato Kiujumla</h5>
        <div class="card">
            <div class="card-body">
                <h6 class="mb-2 f-w-400 text-muted">Kwa Mwaka</h6>
                <h3 class="mb-3">TZS 7,650</h3>
                <div id="income-overview-chart"></div>
            </div>
        </div>
    </div>

    <div class="col-md-12 col-xl-12">
        <h5 class="mb-3">Matoleo ya Hivi Karibuni</h5>
        <div class="card tbl-card">
            <div class="card-body">
                <div class="table-responsive">


                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'options' => ['class' => 'table table-hover table-borderless mb-0'],
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            [
                                'label' => 'Msharika',
                                'value' => function ($data) {
                                                        if ($data->user) {
                                                            return $data->user->first_name . " " . $data->user->last_name;
                                                        }
                                                        return "Michango ya Jumla";
                                                    }

                            ],
                            'contributionsType.name',
                            'amount',
                            'date_of_payment',
                            'payment_mode',
                            'reference_no',
                            //'payment_desc:ntext',
                            //'channel_name',
                    
                        ],
                    ]); ?>

                    php yii migrate/create update_dob_columns_to_foreign_keys


                </div>
            </div>
        </div>
    </div>

</div>
</div>