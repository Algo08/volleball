<?php
/**
 * @var \common\models\News $news
 */
use yii\helpers\Url;

?>
<!-- Modal1 -->
<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <section>
                <div class="modal-body">
                    <h5><?=$news->text_head?></h5>
                    <p><?=$news->text_body?></p>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- //Modal1 -->