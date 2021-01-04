<?php
/**
 * @var \common\models\Gallery[] $gallery
 */

use yii\helpers\Url;

?>



    <div class="gallery-main">
        <div class="gallery-bott">
            <?php foreach ($gallery as $g):?>
                <?= $this->render('/gallery/photo',['gallery'=>$g])?>
            <?php endforeach;?>
            <div class="clearfix"> </div>
        </div>
    </div>


