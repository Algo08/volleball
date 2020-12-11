<?php
/**
* @var \common\models\Comments[] $comments
*/
use yii\bootstrap4\Html;
use yii\helpers\Url;
?>

<div class="new-comment media mb-2">

</div>
<!--Comment-->
<?php foreach ($comments as $comment):?>
    <!-- single comment -->
    <div class="media">
        <div class="media-left">
            <img src="<?=Url::to('@web'.$comment->uSER->image_location)?>" alt="">
        </div>
        <div class="media-body">
            <h4 class="media-heading"><?=$comment->uSER->username?></h4>
            <p><?=$comment->text?></p>
            <div class="date-reply"><span><?=date('M d, yy H:i',strtotime($comment->create_date))?></span>
                <a href="javascript:0;" class="reply-btn" data-key="<?=$comment->id?>">Reply</a></div>
        </div>
    </div>
    <!-- /single comment -->
    <!--Reply input-->
    <?php if (Yii::$app->user->identity):?>
        <div class="media ml-4 d-none">
            <div class="media-left">
                <img src="<?=Url::to('@web'.$comment->uSER->image_location)?>" alt="">
            </div>
            <div class="media-body">
                <h5 class="m-0"><?=Yii::$app->user->identity->username?></h5>
                <?= Html::input('search','','',
                    ['class' => 'form-control shadow-none mb-3 mt-2 rounded-0 comment-input comment-id-'.$comment->id,
                        'placeholder' => 'text', 'data-value' => $comment->news_id, 'data-reply' => $comment->id])?>
            </div>
        </div>
    <?php endif;?>

    <!--Reply-->
    <?php foreach($comment->rEPLYCOMMENTS as $replycomment):?>
        <!-- comment reply -->
        <div class="media ml-4">
            <div class="media-left">
                <img src="<?=Url::to('@web'.$replycomment->uSER->image_location)?>" alt="">
            </div>
            <div class="media-body">
                <h4 class="media-heading"><?=$replycomment->uSER->username?></h4>
                <p><?=$replycomment->text?></p>
                <div class="date-reply"><span><?=date('M d, yy H:i',strtotime($replycomment->create_date))?></span>
                    <a href="javascript:0;" class="reply-btn" data-key="<?=$replycomment->id?>">Reply</a></div>
            </div>
        </div>
        <!-- /comment reply -->

        <!--Reply input-->
        <?php if (Yii::$app->user->identity):?>
            <div class="media ml-4 d-none">
                <div class="media-left">
                    <img src="<?=Url::to('@web'.$replycomment->uSER->image_location)?>" alt="">
                </div>
                <div class="media-body">
                    <h5 class="m-0"><?=Yii::$app->user->identity->username?></h5>
                    <?= Html::input('search','','',
                        ['class' => 'form-control shadow-none mb-3 mt-2 rounded-0 comment-input comment-id-'.$replycomment->id,
                            'placeholder' => 'text', 'data-value' => $replycomment->news_id, 'data-reply' => $replycomment->id])?>
                </div>
            </div>
        <?php endif;?>
    <?php endforeach;?>
    <div class="media ml-4 new-reply-comment-id-<?=$comment->id?>">

    </div>
<?php endforeach;?>


<?php
$urlComment = \yii\helpers\Url::to(['news/add-comment']);
$script = <<< JS

    var newComment = $('.new-comment');
    var defaultComment = $('.default-comment');
    var input = $('.comment-input');
    var replyBtn = $('.reply-btn');
    replyBtn.on('click', function (){
        var id = $(this).data('key');
        $('.comment-id-'+id).parent().parent().toggleClass('d-none');
    })
    input.keyup(function(e){
        var input = $(this);
        var newReplyComment = $('.new-reply-comment-id-'+input.data('reply'));
        if(e.keyCode == 13 && input.val() != '')
        {
            $.ajax({
                url: "$urlComment",
                data:{
                    text: input.val(),
                    id: input.data('value'),
                    reply: input.data('reply'),
                },
                success: function (data) {
                    defaultComment.find('.date').text(data);
                    defaultComment.find('.text').text(input.val());
                    if(input.data('reply')){
                        newReplyComment.html(newReplyComment.html()+defaultComment.html());
                    }
                    else{
                        newComment.html(defaultComment.html()+newComment.html());
                    }
                    input.val('');

                }
            });
        }
    });

  
JS;
$this->registerJs( $script );
?>

