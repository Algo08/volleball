<?php
/**
 * @var \common\models\Count[] $count
 **/

?>
<div class="stats">
    <div class="overlay"></div>
    <div class="container">
        <div class="stats-info">
            <?php foreach ($count as $c):?>
            <div class="col-md-3 col-sm-3 stats-grid slideanim">
                <div class='numscroller numscroller-big-bottom' data-slno='2' data-min='0' data-max='<?=$c->amount?>' data-delay='.01' data-increment="2"><?=$c->amount?></div>
                <p class="stats-info"><?=$c->name?></p>
            </div>
            <?php endforeach;?>
            <div class="clearfix"></div>
        </div>
    </div>
</div>