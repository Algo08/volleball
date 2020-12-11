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
        <div class="sidebar-brand-text mx-2">Geostudy <sup>uz</sup></div>
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
        O`rganish
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-question"></i>
            <span>Testlar</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?=\yii\helpers\Url::to('@web/section')?>">Bo`limlar</a>
                <a class="collapse-item" href="<?=\yii\helpers\Url::to('@web/test/index')?>">Test <sup>uz</sup></a>
                <a class="collapse-item" href="<?=\yii\helpers\Url::to('@web/test/index-ru')?>">Test <sup>ru</sup></a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?=\yii\helpers\Url::to('@web/tariffs')?>">
            <i class="fas fa-fw fa-money-check-alt"></i>
            <span>Tariflar</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?=\yii\helpers\Url::to('@web/books')?>">
            <i class="fas fa-fw fa-book"></i>
            <span>Darsliklar</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?=\yii\helpers\Url::to('@web/video')?>">
            <i class="fas fa-fw fa-video"></i>
            <span>Video darsliklar</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?=\yii\helpers\Url::to('@web/pictures')?>">
            <i class="far fa-fw fa-images"></i>
            <span>Rasmlar</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="<?=\yii\helpers\Url::to('@web/user')?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Foydalanuvchilar</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        O'quv kursi haqida
    </div>

    <li class="nav-item">
        <a class="nav-link" href="<?=\yii\helpers\Url::to('@web/news')?>">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Yangiliklar</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?=\yii\helpers\Url::to('@web/comments')?>">
            <i class="fas fa-fw fa-comment"></i>
            <span>Izohlar</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?=\yii\helpers\Url::to('@web/today')?>">
            <i class="fas fa-fw fa-calendar"></i>
            <span>Bugungi kun</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?=\yii\helpers\Url::to('@web/about')?>">
            <i class="fas fa-fw fa-pen"></i>
            <span>Biz haqimizda</span></a>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
