<?php

use yii\helpers\Url;
use yii\helpers\Html;
//AppAsset::register($this);
?>


<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header" style="padding-left:32%;">

            <?= Html::a(
                Html::img('@web/images/logo_kkkt.jpeg', ['class' => 'img-fluid', 'style' => 'height:50px']),
                ['site/index'],
                ['class' => 'b-brand text-primary']
            ) ?>
        </div>
        <div class="navbar-content">
            <ul class="pc-navbar">
                <li class="pc-item">
                    <?= Html::a(
                        '<span class="pc-micon"><i class="ti ti-dashboard"></i></span> <span class="pc-mtext">Dashibodi</span>',
                        ['site/index'],
                        ['class' => 'pc-link']
                    ) ?>
                </li>

                <li class="pc-item">
                    <?= Html::a(
                        '<span class="pc-micon"><i class="ti ti-user"></i></span> <span class="pc-mtext">Msharika</span>',
                        ['user/index'],
                        ['class' => 'pc-link']
                    ) ?>
                </li>


                <li class="pc-item">
                    <?= Html::a(
                        '<span class="pc-micon"><i class="ti ti-report-money"></i></span> <span class="pc-mtext">Matoleo</span>',
                        ['contribution/index'],
                        ['class' => 'pc-link']
                    ) ?>
                </li>



                <li class="pc-item">
                    <?= Html::a(
                        '<span class="pc-micon"><i class="ti ti-growth"></i></span> <span class="pc-mtext">Tegemezi</span>',
                        ['dependant/index'],
                        ['class' => 'pc-link']
                    ) ?>
                </li>

                <li class="pc-item">
                    <?= Html::a(
                        '<span class="pc-micon"><i class="ti ti-building-warehouse"></i></span> <span class="pc-mtext">Sharika</span>',
                        ['center/index'],
                        ['class' => 'pc-link']
                    ) ?>
                </li>

                <li class="pc-item">
                    <?= Html::a(
                        '<span class="pc-micon"><i class="ti ti-speakerphone"></i></span> <span class="pc-mtext">Ujumbe</span>',
                        ['message/index'],
                        ['class' => 'pc-link']
                    ) ?>
                </li>
                <li class="pc-item">
                    <?= Html::a(
                        '<span class="pc-micon"><i class="ti ti-currency-dollar"></i></span> <span class="pc-mtext">Aina za Matoleo</span>',
                        ['contributions-type/index'],
                        ['class' => 'pc-link']
                    ) ?>
                </li>
                <li class="pc-item">
                    <?= Html::a(
                        '<span class="pc-micon"><i class="ti ti-letter-w"></i></span> <span class="pc-mtext">Wilaya</span>',
                        ['district/index'],
                        ['class' => 'pc-link']
                    ) ?>
                </li>
                <li class="pc-item">
                    <?= Html::a(
                        '<span class="pc-micon"><i class="ti ti-letter-m"></i></span> <span class="pc-mtext">Mkoa</span>',
                        ['region/index'],
                        ['class' => 'pc-link']
                    ) ?>
                </li>
                <li class="pc-item">
                    <?= Html::a(
                        '<span class="pc-micon"><i class="ti ti-list"></i></span> <span class="pc-mtext">Ripoti</span>',
                        ['site/report'],
                        ['class' => 'pc-link']
                    ) ?>
                </li>
                <hr class="sidebar-divider">
                <li class="pc-item">
                    
                    <?= Html::beginForm(['/site/logout'], 'post', ['id' => 'logout-form']) ?>
                    <?= Html::a('<span class="pc-micon"><i class="ti ti-logout"></i></span> <span class="pc-mtext">Kutoka</span>', '#', [
                    'onclick' => "document.getElementById('logout-form').submit(); return false;",
                    'class' => 'pc-link', // adjust this to match your nav styles
                    ]) ?>
                    <?= Html::endForm() ?>
                </li>




                <!----

                <li class="pc-item pc-caption">
                    <label>UI Components</label>
                    <i class="ti ti-dashboard"></i>
                </li>
                <li class="pc-item">
                    <a href="../elements/bc_typography.html" class="pc-link">
                        <span class="pc-micon"><i class="ti ti-typography"></i></span>
                        <span class="pc-mtext">Typography</span>
                    </a>
                </li>
                <li class="pc-item">
                    <a href="../elements/bc_color.html" class="pc-link">
                        <span class="pc-micon"><i class="ti ti-color-swatch"></i></span>
                        <span class="pc-mtext">Color</span>
                    </a>
                </li>

                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link"><span class="pc-micon"><i class="ti ti-menu"></i></span><span
                            class="pc-mtext">Menu
                            levels</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                    <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link" href="#!">Level 2.1</a></li>

                    </ul>
                </li>
--->
            </ul>

        </div>
    </div>
</nav>