<?php

/**
* @var \common\models\News $news
 **/

use yii\helpers\Url;

?>

<div class="col-sm-4 news-grid" data-key="<?=$news->id?>">
    <a href="javascript:0;">
        <img src="<?=Url::to('@web'.$news->image_location)?>" class="img-responsive" alt="" />
    </a>
    <div class="news-text">
        <div class="news-events-agile">
            <h5>
                <a href="javascript:0;">07 Nov</a>
            </h5>
            <div class="post-img">
                <a href="javascript:0;">
                    <ul>
                        <li>
                            <span class="fa fa-comments" aria-hidden="true"></span>
                        </li>
                        <li>
                            <span class="fa fa-heart" aria-hidden="true"></span>
                        </li>
                        <li>
                            <span class="fa fa-share" aria-hidden="true"></span>
                        </li>
                    </ul>
                </a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="detail-bottom" style="min-height: 170px">
            <a href="javascript:0;">
                <h6><?=$news->text_head?></h6>
            </a>
            <p><?=$news->text_part?></p>
        </div>
    </div>
</div>
<div class="modal-news"></div>
<?php
$urlModal = \yii\helpers\Url::to(['/news/news-view']);

$script = <<< JS
var newsGrid = $('.news-grid[data-key="$news->id"]');
var modalNews = $('.modal-news');
        newsGrid.on('click',function(event) {
            event.preventDefault();
            newsId = $(this).data('key');
            $.ajax({
                url: '$urlModal',
                data:{
                    id: newsId,
                }, 
                success: function (data) {
                    modalNews.html(data);
                    $('#myModal').modal('show');
                }
            });
        });
      
JS;
$this->registerJs( $script );
?>

