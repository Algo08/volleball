<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about" id="about">
    <div class="container">
        <h3 class="title">About Us
            <img src="<?=Url::to('@web/frontend/web/theme/img/logo2.png')?>" alt="" />
        </h3>
        <div class="about-top">
            <div class="col-md-6 about-img-agile">
                <img class="img-responsive" src="<?=Url::to('@web/frontend/web/theme/img/about63.png')?>" alt="">
            </div>
            <div class="col-md-6 about-wel">
                <h2>A Few Words About Our Club</h2>
                <p>Masagni dolores eoquie int Basmodi temporant, ut laboreas dolore magnam aliquam kuytase uaeraquis autem vel eum iure
                    reprehend.Unicmquam eius, Basmodi temurer sehsMunim.</p>
                <ul>
                    <li>
                        <i class="glyphicon glyphicon-ok"></i>Masagni dolores eoquie voluptaquisquam</li>
                    <li>
                        <i class="glyphicon glyphicon-ok"></i>Ipsumquia dolor sitamnetase adipiscquam eiuse</li>
                    <li>
                        <i class="glyphicon glyphicon-ok"></i>Basmodi temporant, ut laboreas dolore</li>
                    <li>
                        <i class="glyphicon glyphicon-ok"></i>Ipsumquia dolor sitamnetase adipiscquam eiuse</li>
                </ul>
                <div class="video-agile">
                    <iframe src="https://player.vimeo.com/video/137808596?title=0&byline=0&portrait=0"></iframe>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
