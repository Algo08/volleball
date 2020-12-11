<?php
/**
 * @var \common\models\News $news
 */
if (class_exists('yii\debug\Module')) {
    $this->off(\yii\web\View::EVENT_END_BODY, [\yii\debug\Module::getInstance(), 'renderToolbar']);
}
?>
<div class="course">
    <a href="<?= \yii\helpers\Url::to(['news/news-view','id'=>$news->id])?>" class="course-img">
        <img src="<?=\yii\helpers\Url::to('@web'.$news->image_location)?>" alt="...">
        <i class="course-link-icon fa fa-link"></i>
    </a>
    <a class="course-title" href="<?= \yii\helpers\Url::to(['news/news-view','id'=>$news->id])?>"><?=$news->text_head?></a>
    <div class="course-details">
        <span class="course-price course-premium">
            <span class="fa fa-comment-o h-100"> <?= $news->cOMMENTS?> |</span>
            <?=date('M d, yy H:i',strtotime($news->create_date))?>
        </span>

        <a href="<?= \yii\helpers\Url::to(['news/news-view','id'=>$news->id])?>" ><span class="course-category font-weight-light"><?= Yii::t('main', 'Batafsil')?></span></a>
    </div>
</div>