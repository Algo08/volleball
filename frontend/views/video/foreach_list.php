<?php
/**
 * @var \common\models\Video[] $videos
 */

?>

<div class="video">
    <?php foreach ($videos as $video):?>
        <?= $this->render('video',['video'=>$video])?>
    <?php endforeach;?>
    <div class="clearfix"> </div>
</div>


<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src=""></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

$script = <<< JS
$(document).ready(function () {
    var iframe = $('.embed-responsive-item');     
    var btnModal = $('.video-modal');
    
    btnModal.click(function (event){
        console.log($(this).data('key'));
        event.preventDefault(); 
        iframe.attr('src', $(this).data('key'));
        $('#largeModal').modal('show');
    });
});
      
JS;
$this->registerJs( $script );
?>