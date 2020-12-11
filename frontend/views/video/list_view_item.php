<?php
/**
 * @var \common\models\Video $model
 */
?>
<!-- Grid column -->

<div class="course mb-4">
    <a href="javascript:0;" class="about-video" data-toggle="modal" data-target="#modal1">
        <img class="img-fluid z-depth-1" src="<?=\yii\helpers\Url::to('@web'.$model->image_location)?>" alt="video"
             data-toggle="modal" data-target="#modal1">
        <i class="play-icon fa fa-play pl-1"></i>
    </a>
    <a class="course-title"><?=$model->name?></a>
    <div class="course-details">
        <a href="javascript:0"><i class="fa fa-youtube"></i> GeoStudyUz</a>
        <span class="course-price course-premium"><?=date('F d, Y',strtotime($model->create_date))?></span>
    </div>
</div>
<!--Modal: Name-->
<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Body-->
            <div class="modal-body mb-0 p-0">

                <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                    <iframe class="embed-responsive-item" src="<?=str_replace('watch?v=', 'embed/', $model->url)?>"
                            allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal: Name-->
<!-- Grid column -->