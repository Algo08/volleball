<?php
/**
 * @var \common\models\Message[] $messages
 */
$message = $message ?? $messages[0];
?>
<!-- Circle Buttons -->
<div class="row">
    <div class="col-lg-5">
        <div class="card shadow mb-4 topbar h-100">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Chats</h6>
            </div>
            <div class="card-body dropdown-list" style="width: 100% !important;">
                <?= $this->renderAjax('messages',['messages'=>$messages])?>
            </div>
        </div>
    </div>

    <div class="col-lg-7 chat-full">
        <?= $this->renderAjax('message',['message'=>$message])?>
    </div>
</div>