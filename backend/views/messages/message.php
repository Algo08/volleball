<?php
/**
 * @var \common\models\Message $message
 */

use yii\bootstrap4\Html;

?>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            <?=$message->name?>
            <span class="float-right"><?= date('M d, yy H:i',strtotime($message->create_date))?></span>
        </h6>
    </div>
    <div class="card-body">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body pr-1">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <a href="tel:<?=$message->phone?>" target="_blank" class="btn col-auto float-right px-1">
                            <i class="fab fa-telegram-plane text-gray-300"></i>
                        </a>
                        <a href="mailto:<?=$message->email?>" class="text-xs font-weight-bold text-warning text-uppercase mb-1 d-lg-inline d-block"><?=$message->email?></a>
                    </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800 col-12"><?=$message->text?></div>
                </div>
            </div>
        </div>
        <?php
        if ($message->readed==0){
            echo Html::a(Yii::t('main', '<i class="far fa-envelope-open"></i> O`qildi sifatida belgilash'), ['readed', 'id' => $message->id], [
                'class' => 'btn btn-success btn-block my-4',
                'data' => [
                    'confirm' => Yii::t('main', 'Tasqiqlash'),
                    'method' => 'post',
                ],
            ]);
        }
        ?>
    </div>
</div>