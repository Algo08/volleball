<style>
    @media (min-width: 768px) {
        .carousel-multi-item-2 .col-md-3 {
            float: left;
            width: 25%;
            max-width: 100%; } }

    .carousel-multi-item-2 .card img {
        border-radius: 2px; }
</style>
<!--Carousel Wrapper-->
<div id="multi-item-example" class="carousel slide carousel-multi-item carousel-multi-item-2" data-ride="carousel">
    <div class="section-header text-center">
        <h2>Gallery</h2>
        <p class="lead">Libris vivendo eloquentiam ex ius, nec id splendide abhorreant.</p>
    </div>
    <!--Slides-->
    <div class="owl-gallery-slider owl-carousel my-3">
        <div class="item">
            <div class="card">
                <img class="img-fluid" src="<?= \yii\helpers\Url::to('@web/theme/img/blog01.jpg')?>"
                     alt="Card image cap">
            </div>
        </div>
        <div class="item">
            <div class="card">
                <img class="img-fluid" src="<?= \yii\helpers\Url::to('@web/theme/img/blog01.jpg')?>"
                     alt="Card image cap">
            </div>
        </div>
        <div class="item">
            <div class="card">
                <img class="img-fluid" src="<?= \yii\helpers\Url::to('@web/theme/img/blog01.jpg')?>"
                     alt="Card image cap">
            </div>
        </div>
        <div class="item">
            <div class="card">
                <img class="img-fluid" src="<?= \yii\helpers\Url::to('@web/theme/img/blog01.jpg')?>"
                     alt="Card image cap">
            </div>
        </div>
        <div class="item">
            <div class="card">
                <img class="img-fluid" src="<?= \yii\helpers\Url::to('@web/theme/img/blog01.jpg')?>"
                     alt="Card image cap">
            </div>
        </div>
        <div class="item">
            <div class="card">
                <img class="img-fluid" src="<?= \yii\helpers\Url::to('@web/theme/img/blog01.jpg')?>"
                     alt="Card image cap">
            </div>
        </div>
    </div>
    <!--/.Slides-->
</div>
<!--/.Carousel Wrapper-->