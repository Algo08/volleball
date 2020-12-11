<?php
/**
 * @var \common\models\Video[] $videos
 * @var yii\data\ActiveDataProvider $dataProvider
 */
use yii\helpers\Url;

$this->title = Yii::t('main','Video darslar');
?>
    <div class="hero-area section">
        <!-- Backgound Image -->
        <div class="bg-image bg-parallax overlay" style="background-image:url(<?=Url::to('@web/frontend/web/theme/img/page-background.jpg')?>)"></div>
        <!-- /Backgound Image -->
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center">
                    <ul class="hero-area-tree">
                        <li><a href="<?= Yii::$app->homeUrl?>"><?=Yii::t('main','Bosh sahifa')?></a></li>
                        <li><?=$this->title?></li>
                    </ul>
                    <h1 class="white-text" id="title"><?=$this->title?></h1>
                </div>
            </div>
        </div>
    </div>
    <div id="blog" class="section">

        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <!-- main blog -->
                <div id="main" class="col-lg-9 col-md-8">
                    <?= $this->renderAjax('list_view',['dataProvider'=>$dataProvider])?>
                </div>
                <!-- /main blog -->

                <!-- aside blog -->
                <div id="aside" class="col-lg-3 col-md-4 pr-0">
                    <!-- language widget -->
                    <div class="switch">
                        <input name="switch" id="one" type="radio" value="uz"/>
                        <label for="one" class="switch__label">Uz</label>
                        <input name="switch" id="two" type="radio" value="ru" />
                        <label for="two" class="switch__label">Ru</label>
                        <input name="switch" id="three" type="radio" value="ko" />
                        <label for="three" class="switch__label" >Ko</label>
                        <div class="switch__indicator" /></div>
                </div>
                <!-- /language widget -->

                <!-- category widget -->
                <div class="widget category-widget">
                    <h3><?= Yii::t('main','Sinflar')?></h3>
                    <?php foreach ($videos as $video):?>
                        <a class="category filter" href="#aside" data-key="<?=$video->class?>">
                            <?= $video->class == 11 ? Yii::t('main','Boshqa') : Yii::t('main','{0,number} sinf',$video->class);?>
                            <span><?=$video->cnt?></span></a>
                    <?php endforeach;?>
                </div>
                <!-- /category widget -->


            </div>
            <!-- /aside blog -->

        </div>
        <!-- row -->

    </div>
    <!-- container -->

    </div>

<?php
$urlVideo = \yii\helpers\Url::to('view');

$script = <<< JS
    $('.category.dropdown').click(function (){
        $('.max-h-auto').removeClass('max-h-auto');
        $(this).next('.dropdown-list').addClass('max-h-auto');
    });

    $(document).ajaxStart(function(){
        $('#preloader1').css('display', 'block');
    }).ajaxStop(function(){
        $('#preloader1').css('display', 'none');
    });
    var filter = $('.category.filter');
    var coursesDiv = $('#main');
    filter.click(function (e){
            e.preventDefault();
            var sinf = $(this).data('key');
            var lang = $('input[name="switch"]:checked').val();
            $.ajax({
                url: '$urlVideo',
                data: {
                    sinf: sinf,
                    lang: lang
                },
                success: function(result) {
                    coursesDiv.html(result);
                }
            });
                
        });
JS;
$this->registerJs( $script );
?>