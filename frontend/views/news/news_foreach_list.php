<?php
/**
 * @var \common\models\News[] $news
 */

use yii\helpers\Url;

?>

<!-- blog -->
<div class="news-section">
    <div class="container">
        <h3 class="title">News
            <img src="<?=Url::to('@web/frontend/web/theme/img/logo2.png')?>" alt="" />
        </h3>
        <div class="news-grids-w3l">
            <?php foreach ($news as $new):?>
                <?= $this->render('/news/news_card',['news'=>$new])?>
            <?php endforeach;?>
        </div>
    </div>
</div>
<!-- //blog -->
