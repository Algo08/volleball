<?php

use yii\helpers\Url;

?>
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
