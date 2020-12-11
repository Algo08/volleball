<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'My Yii Application';
?>
<body>

<!-- banner-text -->
<div class="banner-text">
    <div class="container">
        <div class="slider">
            <div class="callbacks_container">
                <ul class="rslides" id="slider3">
                    <li>

                        <div class="banner-w3lstext">
                            <h3>a wide selection of tennis accessories</h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit.</p>
                            <div class="video-pop-wthree">
                                <a href="#small-dialog1" class="view play-icon popup-with-zoom-anim ">
                                    <i class="fa fa-play-circle" aria-hidden="true"></i>Watch Our Video</a>
                                <div id="small-dialog1" class="mfp-hide w3ls_small_dialog wthree_pop">
                                    <iframe src="https://player.vimeo.com/video/137808596?title=0&byline=0&portrait=0"></iframe>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>

                        <div class="banner-w3lstext">
                            <h3>everything you need for tennis playing</h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit.</p>
                            <div class="video-pop-wthree">
                                <a href="#small-dialog2" class="view play-icon popup-with-zoom-anim ">
                                    <i class="fa fa-play-circle" aria-hidden="true"></i>Watch Our Video</a>
                                <div id="small-dialog2" class="mfp-hide w3ls_small_dialog wthree_pop">
                                    <iframe src="https://player.vimeo.com/video/137808596?title=0&byline=0&portrait=0"></iframe>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>

                        <div class="banner-w3lstext">
                            <h3>we build leaders on the court</h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit.</p>
                            <div class="video-pop-wthree">
                                <a href="#small-dialog3" class="view play-icon popup-with-zoom-anim ">
                                    <i class="fa fa-play-circle" aria-hidden="true"></i>Watch Our Video</a>
                                <div id="small-dialog3" class="mfp-hide w3ls_small_dialog wthree_pop">
                                    <iframe src="https://player.vimeo.com/video/137808596?title=0&byline=0&portrait=0"></iframe>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- //banner-text -->
<!-- //banner -->

<!-- welcome -->
<div class="about" id="about">
    <div class="container">
        <h3 class="title">About Us
            <img src="<?=Url::to('@web/frontend/web/theme/img/logo2.png')?>" alt="" />
        </h3>
        <div class="about-top">
            <div class="col-md-6 about-img-agile">
                <img class="img-responsive" src="<?=Url::to('@web/frontend/web/theme/img/about63.png')?>" alt="">
            </div>
            <div class="col-md-6 about-wel">
                <h2>A Few Words About Our Club</h2>
                <p>Masagni dolores eoquie int Basmodi temporant, ut laboreas dolore magnam aliquam kuytase uaeraquis autem vel eum iure
                    reprehend.Unicmquam eius, Basmodi temurer sehsMunim.</p>
                <ul>
                    <li>
                        <i class="glyphicon glyphicon-ok"></i>Masagni dolores eoquie voluptaquisquam</li>
                    <li>
                        <i class="glyphicon glyphicon-ok"></i>Ipsumquia dolor sitamnetase adipiscquam eiuse</li>
                    <li>
                        <i class="glyphicon glyphicon-ok"></i>Basmodi temporant, ut laboreas dolore</li>
                    <li>
                        <i class="glyphicon glyphicon-ok"></i>Ipsumquia dolor sitamnetase adipiscquam eiuse</li>
                </ul>
                <div class="video-agile">
                    <iframe src="https://player.vimeo.com/video/137808596?title=0&byline=0&portrait=0"></iframe>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //welcome -->

<!-- stats -->
<div class="stats">
    <div class="container">
        <div class="stats-info">
            <div class="col-md-3 col-sm-3 stats-grid slideanim">
                <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='1200' data-delay='.5' data-increment="1">1200</div>
                <p class="stats-info">years of experience</p>
            </div>
            <div class="col-md-3 col-sm-3 stats-grid slideanim">
                <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='3000' data-delay='.5' data-increment="1">3000</div>
                <p class="stats-info">qualified instructors</p>
            </div>
            <div class="col-md-3 col-sm-3 stats-grid slideanim">
                <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='9000' data-delay='.5' data-increment="10">9000</div>
                <p class="stats-info">tennis courts</p>
            </div>
            <div class="col-md-3 col-sm-3 stats-grid slideanim">
                <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='169' data-delay='.5' data-increment="1">169</div>
                <p class="stats-info">annual competitions</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //stats -->

<!-- services -->
<div class="services" id="services">
    <div class="container">
        <h3 class="title">Services
            <img src="<?=Url::to('@web/frontend/web/theme/img/logo2.png')?>" alt="" />
        </h3>
        <div class="col-md-6 left-services-agile">
            <div class="left-services-agile1">
                <i class="fa fa-clone i1" aria-hidden="true"></i>
                <h4>Service 1</h4>
                <div class="clearfix"></div>
                <p>Ut interdum, quam in tempus tristique, turpis magna interdum nulla, sit amet interdum lacus tortor vitae ipsum. Etiam
                    in hendrerit odio, turpis magna interdum nulla</p>
            </div>
            <div class="left-services-agile1">
                <i class="fa fa-american-sign-language-interpreting i1" aria-hidden="true"></i>
                <h4>Service 2</h4>
                <div class="clearfix"></div>
                <p>Ut interdum, quam in tempus tristique, turpis magna interdum nulla, sit amet interdum lacus tortor vitae ipsum. Etiam
                    in hendrerit odio, turpis magna interdum nulla</p>
            </div>
            <div class="left-services-agile1">
                <i class="fa fa-magic i1" aria-hidden="true"></i>
                <h4>Service 3</h4>
                <div class="clearfix"></div>
                <p>Ut interdum, quam in tempus tristique, turpis magna interdum nulla, sit amet interdum lacus tortor vitae ipsum. Etiam
                    in hendrerit odio, turpis magna interdum nulla</p>
            </div>
        </div>
        <div class="col-md-6 agileits_updates_grid_right">
            <h3>Features</h3>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title asd">
                            <a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true"
                               aria-controls="collapseOne">
                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                <i class="glyphicon glyphicon-minus" aria-hidden="true"></i>assumenda est cliche reprehenderit
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body panel_text">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                            non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title asd">
                            <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                               aria-controls="collapseTwo">
                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                <i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Itaque earum rerum
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body panel_text">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                            non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title asd">
                            <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                               aria-controls="collapseThree">
                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                <i class="glyphicon glyphicon-minus" aria-hidden="true"></i>autem accusamus terry quibusdam
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body panel_text">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                            non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFour">
                        <h4 class="panel-title asd">
                            <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false"
                               aria-controls="collapseFour">
                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                <i class="glyphicon glyphicon-minus" aria-hidden="true"></i>excepturi sint cliche reprehenderit
                            </a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                        <div class="panel-body panel_text">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                            non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //services -->

<!-- team -->
<div class="team  wthree" id="team">
    <div class="container">
        <h3 class="title">Instructors
            <img src="<?=Url::to('@web/frontend/web/theme/img/logo2.png')?>" alt="" />
        </h3>
        <div class="team-bottom">
            <div class="col-md-3 col-xs-3 team-grid">
                <img src="<?=Url::to('@web/frontend/web/theme/img/t1.jpg')?>" class="img-responsive" alt="">
                <div class="caption">
                    <div class="team-text">
                        <h4>Mack</h4>
                    </div>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa fa-facebook f1" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-twitter f2" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-google-plus f3" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-xs-3 team-grid">
                <img src="<?=Url::to('@web/frontend/web/theme/img/t2.jpg')?>" class="img-responsive" alt="">
                <div class="caption">
                    <div class="team-text">
                        <h4>Cruz</h4>
                    </div>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa fa-facebook f1" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-twitter f2" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-google-plus f3" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-xs-3 team-grid">
                <img src="<?=Url::to('@web/frontend/web/theme/img/t3.jpg')?>" class="img-responsive" alt="">
                <div class="caption">
                    <div class="team-text">
                        <h4>Rochy</h4>
                    </div>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa fa-facebook f1" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-twitter f2" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-google-plus f3" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-xs-3 team-grid">
                <img src="<?=Url::to('@web/frontend/web/theme/img/t4.jpg')?>" class="img-responsive" alt="">
                <div class="caption">
                    <div class="team-text">
                        <h4>Rojoi</h4>
                    </div>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa fa-facebook f1" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-twitter f2" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-google-plus f3" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //team -->

<!-- blog -->
<div class="news-section">
    <div class="container">
        <h3 class="title">Our Blog
            <img src="<?=Url::to('@web/frontend/web/theme/img/logo2.png')?>" alt="" />
        </h3>
        <div class="news-grids-w3l">
            <div class="col-xs-4 news-grid">
                <a href="#" data-toggle="modal" data-target="#myModal">
                    <img src="<?=Url::to('@web/frontend/web/theme/img/b1.jpg')?>" class="img-responsive" alt="" />
                </a>
                <div class="news-text">
                    <div class="news-events-agile">
                        <h5>
                            <a href="#" data-toggle="modal" data-target="#myModal">07 Nov</a>
                        </h5>
                        <div class="post-img">
                            <a href="#">
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
                    <div class="detail-bottom">
                        <a href="#" data-toggle="modal" data-target="#myModal">
                            <h6>Eiusmod tempor incididunt ut labore sed do eiusmod</h6>
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore sed do eiusmod
                            tempor incididunt ut labore</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-4 news-grid">
                <a href="#" data-toggle="modal" data-target="#myModal">
                    <img src="<?=Url::to('@web/frontend/web/theme/img/b2.jpg')?>" class="img-responsive" alt="" />
                </a>
                <div class="news-text">
                    <div class="news-events-agile event-colo3">
                        <h5>
                            <a href="#" data-toggle="modal" data-target="#myModal">16 Nov</a>
                        </h5>
                        <div class="post-img">
                            <a href="#">
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
                    <div class="detail-bottom">
                        <a href="#" data-toggle="modal" data-target="#myModal">
                            <h6>Eiusmod tempor incididunt ut labore sed do eiusmod</h6>
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore sed do eiusmod
                            tempor incididunt ut labore</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-4 news-grid">
                <a href="#" data-toggle="modal" data-target="#myModal">
                    <img src="<?=Url::to('@web/frontend/web/theme/img/b3.jpg')?>" class="img-responsive" alt="" />
                </a>
                <div class="news-text">
                    <div class="news-events-agile event-colo1">
                        <h5>
                            <a href="#" data-toggle="modal" data-target="#myModal">16 Nov</a>
                        </h5>
                        <div class="post-img">
                            <a href="#">
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
                    <div class="detail-bottom">
                        <a href="#" data-toggle="modal" data-target="#myModal">
                            <h6>Eiusmod tempor incididunt ut labore sed do eiusmod</h6>
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore sed do eiusmod
                            tempor incididunt ut labore</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
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
                    <h5>Tennis Hub</h5>
                    <img src="<?=Url::to('@web/frontend/web/theme/img/1.jpg')?>" alt=" " class="img-responsive" />
                    <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi
                        consequatur? Quis autem vel eum iure reprehenderit qui in ea.
                    </p>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- //Modal1 -->
<!-- //blog -->

<!-- gallery -->
<div class="gallery" id="gallery">
    <div class="container">
        <h3 class="title">Our Gallery
            <img src="<?=Url::to('@web/frontend/web/theme/img/logo2.png')?>" alt="" />
        </h3>
        <div class="gallery-main">
            <div class="gallery-bott">
                <div class="col-xs-4 col1 gallery-grid">
                    <a href="<?=Url::to('@web/frontend/web/theme/img/b3.jpg')?>" class="b-link-stripe b-animate-go  thickbox">
                        <figure class="effect-bubba">
                            <img class="img-responsive" src="<?=Url::to('@web/frontend/web/theme/img/b3.jpg')?>" alt="">
                            <figcaption>
                                <h4 class="gal">Tennis Hub</h4>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-xs-4 col1 gallery-grid">
                    <a href="<?=Url::to('@web/frontend/web/theme/img/g6.jpg')?>" class="b-link-stripe b-animate-go  thickbox">
                        <figure class="effect-bubba">
                            <img class="img-responsive" src="<?=Url::to('@web/frontend/web/theme/img/g6.jpg')?>" alt="">
                            <figcaption>
                                <h4 class="gal">Tennis Hub</h4>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-xs-4 col1 gallery-grid">
                    <a href="<?=Url::to('@web/frontend/web/theme/img/g5.jpg')?>" class="b-link-stripe b-animate-go  thickbox">
                        <figure class="effect-bubba">
                            <img class="img-responsive" src="<?=Url::to('@web/frontend/web/theme/img/g5.jpg')?>" alt="">
                            <figcaption>
                                <h4 class="gal">Tennis Hub</h4>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-xs-4 col1 gallery-grid">
                    <a href="<?=Url::to('@web/frontend/web/theme/img/g4.jpg')?>" class="b-link-stripe b-animate-go  thickbox">
                        <figure class="effect-bubba">
                            <img class="img-responsive" src="<?=Url::to('@web/frontend/web/theme/img/g4.jpg')?>" alt="">
                            <figcaption>
                                <h4 class="gal">Tennis Hub</h4>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-xs-4 col1 gallery-grid">
                    <a href="<?=Url::to('@web/frontend/web/theme/img/b1.jpg')?>" class="b-link-stripe b-animate-go  thickbox">
                        <figure class="effect-bubba">
                            <img class="img-responsive" src="<?=Url::to('@web/frontend/web/theme/img/b1.jpg')?>" alt="">
                            <figcaption>
                                <h4 class="gal">Tennis Hub</h4>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-xs-4 col1 gallery-grid">
                    <a href="<?=Url::to('@web/frontend/web/theme/img/b2.jpg')?>" class="b-link-stripe b-animate-go  thickbox">
                        <figure class="effect-bubba">
                            <img class="img-responsive" src="<?=Url::to('@web/frontend/web/theme/img/b2.jpg')?>" alt="">
                            <figcaption>
                                <h4 class="gal">Tennis Hub</h4>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- //gallery -->

<!-- contact -->
<div class="contact" id="contact">
    <div class="container">
        <h3 class="title">Contact Us
            <img src="<?=Url::to('@web/frontend/web/theme/img/logo2.png')?>" alt="" />
        </h3>
        <div class="contact-grid-agiles-w3l">
            <div class="col-md-5 col-xs-5 contact-grid-agile">
                <div class="contact-right1">
                    <img src="<?=Url::to('@web/frontend/web/theme/img/mail36.jpg')?>" alt="" />
                </div>
                <div class="contact-right2">
                    <div class="call ">
                        <div class="col-xs-4 contact-grdr-w3l">
                            <h3>Call us :</h3>
                        </div>
                        <div class="col-xs-8 contact-grdr-w3l">
                            <ul>
                                <li>+3402 890 679</li>
                            </ul>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="call">
                        <div class="col-xs-4 contact-grdr-w3l">
                            <h3>Locate us :</h3>
                        </div>
                        <div class="col-xs-8 contact-grdr-w3l">
                            <ul>
                                <li>345 Diamond Street</li>
                            </ul>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="call">
                        <div class="col-xs-4 contact-grdr-w3l">
                            <h3>Mail us :</h3>
                        </div>
                        <div class="col-xs-8 contact-grdr-w3l">
                            <ul>
                                <li>
                                    <a href="mailto:info@example.com">info@example.com</a>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-xs-7 contact-grid-agile">
                <form action="#" method="post">
                    <input type="text" placeholder="Name" name="name" required="">
                    <input type="email" placeholder="Email" name="email" required="">
                    <input type="text" placeholder="Subject" name="subject" required="">
                    <textarea placeholder="Message.." name="message" required=""></textarea>
                    <input type="submit" value="Send Now">
                </form>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //contact -->


<?php
$urlTable = \yii\helpers\Url::to('view');

$script = <<< JS
// You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider3").responsiveSlides({
            auto: true,
            pager: true,
            nav: false,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });

$(document).ready(function () {
        $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

    });
$(function () {
        $('.gallery-grid a').Chocolat();
    });

jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();

            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
    
$(document).ready(function () {
        /*
        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };
        */
        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
JS;
$this->registerJs( $script );
?>
    
</body>