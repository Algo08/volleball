<?php
/**
 * @var \common\models\News[] $news
 */
?>

<?php foreach ($news as $new):?>
    <div class="col-lg-4 px-4 mb-5 col-12">
        <div class="course">
            <a href="<?= \yii\helpers\Url::to(['news-view','id'=>$new->id])?>" class="course-img">
                <img src="<?=\yii\helpers\Url::to('@web'.$new->image_location)?>" alt="...">
                <i class="course-link-icon fa fa-link"></i>
            </a>
            <a class="course-title" href="<?= \yii\helpers\Url::to(['news-view','id'=>$new->id])?>"><?=$new->text_head?></a>
            <div class="course-details">
                <span class="course-category">
                    <?=date('M d, yy H:i',strtotime($new->create_date))?> |
                    <span class="fa fa-comment-o h-100"> <?= $new->cOMMENTS?></span>
                </span>
                <a href="<?= \yii\helpers\Url::to(['news-view','id'=>$new->id])?>" class="course-price course-premium"><?= Yii::t('main', 'Batafsil')?></a>
            </div>
        </div>
    </div>
<?php endforeach;?>