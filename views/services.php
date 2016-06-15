<?php
/**
 * Created by PhpStorm.
 * User: qiang
 * Date: 6/10/16
 * Time: 2:14 PM
 */
?>


<section id="feature" class="transparent-bg">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>服务项目</h2>
            <?= Yii::$app->getHtmlBlock('services-lead')->content?>
        </div>

        <div class="row">
            <div class="features">
                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <?= Yii::$app->getHtmlBlock('service-website')?>

                    <div class="feature-wrap">
                        <i class="fa fa-internet-explorer"></i>
                        <h2>网站开发</h2>
                        <h3>基于html5，css3的个人，企业网站设计，网站研发</h3>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-apple"></i>
                        <h2>App开发</h2>
                        <h3>iOS，Android app程序设计研发</h3>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-weixin"></i>
                        <h2>微信整合</h2>
                        <h3>基于微信平台的微网站，微商城的研发和微信推广</h3>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-google"></i>
                        <h2>网站推广营销</h2>
                        <h3>谷歌，百度SEO服务，社交网络推广，微信推广</h3>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-cloud"></i>
                        <h2>虚拟空间和云服务</h2>
                        <h3>提供高质量虚拟空间和云服务</h3>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-server"></i>
                        <h2>维护运营</h2>
                        <h3>服务的运营和维护，监控，安全与升级</h3>
                    </div>
                </div><!--/.col-md-4-->
            </div><!--/.services-->
        </div><!--/.row-->


        <div class="get-started center wow fadeInDown">
            <h2>还有什么不清楚的吗？</h2>
            <p class="lead">
                软件和网站虽然是一次性的完成，可是不同专业程度完成的质量参差不齐，
                <br>选择一个稳定的，长期，可靠，安全的团队来执行是至关紧要的。
            </p>

            <div class="request">
                <h4><a href="tel:<?=Yii::$app->setting->get('phone')?>">打个电话免费咨询一下</a></h4>
            </div>
        </div><!--/.get-started-->

        <div class="clients-area center wow fadeInDown">
            <h2>我们客户怎么说</h2>
            <p class="lead">
                客户的反馈帮助我们不断改进我们的服务和技术，
            </p>
        </div>

        <div class="row">
            <div class="col-md-4 wow fadeInDown">
                <div class="clients-comments text-center">
                    <img src="images/client1.png" class="img-circle" alt="">
                    <h3>我的网站之前是找了一个学生来制作的，但是学生回国了，甚至我的域名都是让他给我申请的，以至于我无法拿回我一直使用的域名。而中国软件很他们主动指导我自己来申请新的域名，就冲这一点，让我觉得他们非常可靠。完成的网站也让我非常满意。
                    </h3>
                    <h4><span>-Steven Chen</span></h4>
                </div>
            </div>
            <div class="col-md-4 wow fadeInDown">
                <div class="clients-comments text-center">
                    <img src="images/client2.png" class="img-circle" alt="">
                    <h3>我们的项目非常复杂，我本来以为他们是无法完成这么高度定制化的任务的，结果却出我意料之外，他们不仅在约定的4个月内完成了，而且根据我们的需求的变更做了很多的修改并没有要求大幅的加价。</h3>
                    <h4><span>-John Wang</span> </h4>
                </div>
            </div>
            <div class="col-md-4 wow fadeInDown">
                <div class="clients-comments text-center">
                    <img src="images/client3.png" class="img-circle" alt="">
                    <h3>中国软件维护我们的内部用的线上系统已经有三年，三年来我们有很多的需求和改进都得到了实现，非常感谢他们的努力和认真。</h3>
                    <h4><span>-Amy Zhu</span></h4>
                </div>
            </div>
        </div>

    </div><!--/.container-->
</section><!--/#feature-->


