<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        'theme/css/bootstrap.css',
        'theme/css/owl.carousel.min.css',
        'theme/css/owl.theme.default.min.css',
        'theme/css/chocolat.css',
        'theme/css/font-awesome.css',
        'theme/css/popuo-box.css',
        'theme/css/style.css',
        'css/site.css',

    ];
    public $js = [
        'theme/js/owl.carousel.min.js',
        'theme/js/easing.js',
        'theme/js/jquery.chocolat.js' ,
        'theme/js/jquery.magnific-popup.js',
        'theme/js/move-top.js',
        'theme/js/numscroller-1.0.js',
        'theme/js/responsiveslides.min.js',
        'theme/js/main.js',

    ];
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'yii\web\YiiAsset'
    ];
}
