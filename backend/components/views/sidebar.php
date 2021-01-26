<?php
//$telegram = Yii::$app->telegram;
//$res = $telegram->sendMessage([
//    'chat_id' => 114695203,
//    'text' => "salam"
//]);?>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= Yii::$app->homeUrl?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <img src="<?= \yii\helpers\Url::to('@web/../theme/img/logo-alt.png')?>" style="width: 45px" alt="">
        </div>
        <div class="sidebar-brand-text mx-2">Volleyball <sup>uz</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?=\yii\helpers\Url::to('@web')?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Bosh sahifa</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Asosiy
    </div>


    <li class="nav-item">
        <a class="nav-link" href="<?=\yii\helpers\Url::to('@web/news')?>">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Yangiliklar</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?=\yii\helpers\Url::to('@web/slide')?>">
            <i class="fas fa-fw fa-image"></i>
            <span>Slide</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?=\yii\helpers\Url::to('@web/count')?>">
            <i class="fas fa-fw fa-image"></i>
            <span>Count</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?=\yii\helpers\Url::to('@web/video')?>">
            <i class="fas fa-fw fa-video"></i>
            <span>Videolar</span></a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-question"></i>
            <span>Rasmlar</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?=\yii\helpers\Url::to('@web/gallery-section')?>">Bo`limlar</a>
                <a class="collapse-item" href="<?=\yii\helpers\Url::to('@web/gallery')?>">Rasmlar</a>
            </div>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link" href="<?=\yii\helpers\Url::to('@web/documents')?>">
            <i class="fa fa-fw fa-book-open"></i>
            <span>Hujjatlar</span></a>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Biz haqimizda
    </div>



    <li class="nav-item">
        <a class="nav-link" href="<?=\yii\helpers\Url::to('@web/trainer')?>">
            <i class="fas fa-people-arrows"></i>
            <span>Murabbiylar</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?=\yii\helpers\Url::to('@web/about')?>">
            <i class="fas fa-pen"></i>
            <span>Biz haqimizda</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?=\yii\helpers\Url::to('@web/partners')?>">
            <i class="fas fa-hands-helping"></i>
            <span>Hamkorlarimiz</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?=\yii\helpers\Url::to('@web/contact')?>">
            <i class="fas fa-phone-alt"></i>
            <span>Bog'lanish</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
