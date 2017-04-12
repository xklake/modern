<?php
/**
 * Created by PhpStorm.
 * User: qiang
 * Date: 6/9/16
 * Time: 5:32 PM
 */
$banners = Yii::$app->getImageByGroup('banner');
$index = 0;
?>

<section id="main-slider" class="no-margin">
    <div class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php foreach($banners as $item) {
            if($index == 0){
            ?>
            <li data-target="<?=Yii::$app->urlManager->getHostInfo().'/#main-slider'?>" data-slide-to="<?=$index?>" class="active"></li>
            <?} else { ?>
            <li data-target="<?=Yii::$app->urlManager->getHostInfo().'/#main-slider'?>" data-slide-to="<?=$index?>"></li>
            <? }
            $index ++ ; }?>
        </ol>

        <div class="carousel-inner"  role="listbox">
            <?php
            $index = 0;
            foreach($banners as $item) {
                if($index == 0){
                ?>
                    <div class="item active" style="background-image: url(<?=Yii::$app->urlManager->getHostInfo().'/'.$item->image?>)">
                <?php } else { ?>
                        <div class="item" style="background-image: url(<?=Yii::$app->urlManager->getHostInfo().'/'.$item->image?>)">
                <?php } ?>
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <div class="animation animated-item-1" style="font-size: 4rem;line-height: 50px;color: #fff;"><?=$item->keywords?></div>
                                    <div class="animation animated-item-2" style="font-size: 2.8rem;margin-top:35px;color: #fff; "><?=$item->description?></div>
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php $index ++; } ?>
        </div><!--/.carousel-inner-->
    </div><!--/.carousel-->
    <a class="prev hidden-xs" href="<?=Yii::$app->urlManager->getHostInfo().'/#main-slider'?>" data-slide="prev" role="button">
        <i class="fa fa-chevron-left"></i>
    </a>
    <a class="next hidden-xs" href="<?=Yii::$app->urlManager->getHostInfo().'/#main-slider'?>" data-slide="next" role="button">
        <i class="fa fa-chevron-right"></i>
    </a>
</section><!--/#main-slider-->

<section id="feature" >
    <div class="container">
        <div class="center wow fadeInDown">
            <div class='div-h2'>服务项目</div>
            <p class="lead">
                针对在英华人业务的需要，我们提供以下的特色服务
            </p>
        </div>

        <div class="row">
            <div class="features">
                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-rocket"></i>
                        <div class='div-h2'>网站设计，网站制作</div>
                        <h3>响应式布局设计，适用多种设备，高精度展示</h3>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-industry"></i>
                        <div class='div-h2'>行业网站设计，快速网页设计</div>
                        <h3>内建餐饮，留学，旅游，中医，SPA，商城等模板</h3>
                    </div>
                </div><!--/.col-md-4-->


                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-weixin"></i>
                        <div class='div-h2'>微信应用开发和整合</div>
                        <h3>微网页开发，微信公众号申请，对接，微信应用开发</h3>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-cloud-download"></i>
                        <div class='div-h2'>域名，空间和服务器管理</div>
                        <h3>域名申请，云空间的申请管理</h3>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-image"></i>
                        <div class='div-h2'>网站管理和运维</div>
                        <h3>网站运维，监控，分析，事故处理，速度优化</h3>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-bar-chart"></i>
                        <div class='div-h2'>搜索引擎优化和网络推广</div>
                        <h3>针对华人企业提供谷歌，百度SEO推广，网站流量监控</h3>
                    </div>
                </div><!--/.col-md-4-->
            </div><!--/.services-->
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#feature-->

<section id="recent-works">
    <div class="container">
        <div class="center wow fadeInDown">
            <div class='div-h2'>近期网站设计作品</div>
        </div>

        <div class="row">
            <?php $banners = Yii::$app->getImageByGroup(2);
            foreach($banners as $item) {
        ?>
            <div class="portfolio-item <?=$item->keywords?> col-xs-12 col-sm-4 col-md-3">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="<?=Yii::$app->urlManager->getHostInfo().'/'.$item->image?>" alt="<?=$item->name?>">
                    <div class="overlay">
                        <div class="recent-work-inner">
                            <h3><a href="<?=$item->url?>"><?=$item->name?></a></h3>
                            <p><?=$item->description?></p>
                            <a class='preview' href="<?=$item->url?>" target="_blank" ref="nofollow">
                                <i class="fa fa-eye"></i>查看
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#recent-works-->

<section id="" class="service-item">
    <div class="container">
        <div class="center wow fadeInDown">
            <div class='div-h2'>服务项目</div>
        </div>

        <div class="row">
            <div class="features">
                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <?= Yii::$app->getHtmlBlock('service-website')?>

                    <div class="feature-wrap">
                        <i class="fa fa-internet-explorer"></i>
                        <div class='div-h2'>网站开发</div>
                        <h3>基于html5，css3的个人，企业网站设计，网站研发</h3>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-apple"></i>
                        <div class='div-h2'>App开发</div>
                        <h3>iOS，Android app程序设计研发</h3>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-weixin"></i>
                        <div class='div-h2'>微信整合</div>
                        <h3>基于微信平台的微网站，微商城的研发和微信推广</h3>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-google"></i>
                        <div class='div-h2'>网站推广营销</div>
                        <h3>谷歌，百度SEO服务，社交网络推广，微信推广</h3>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-cloud"></i>
                        <div class='div-h2'>虚拟空间和云服务</div>
                        <h3>提供高质量虚拟空间和云服务</h3>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-server"></i>
                        <div class='div-h2'>维护运营</div>
                        <h3>服务的运营和维护，监控，安全与升级</h3>
                    </div>
                </div><!--/.col-md-4-->
            </div><!--/.services-->
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#services-->

<section id="middle">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 wow fadeInDown">
                <div class="skill">
                    <div class='div-h2'>我们的技能</div>
                    <div class="progress-wrap">
                        <h3>图形设计</h3>
                        <div class="progress">
                            <div class="progress-bar  color1" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                                <span class="bar-width">85%</span>
                            </div>

                        </div>
                    </div>

                    <div class="progress-wrap">
                        <h3>HTML 5</h3>
                        <div class="progress">
                            <div class="progress-bar color2" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                <span class="bar-width">95%</span>
                            </div>
                        </div>
                    </div>

                    <div class="progress-wrap">
                        <h3>CSS 3</h3>
                        <div class="progress">
                            <div class="progress-bar color3" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                <span class="bar-width">80%</span>
                            </div>
                        </div>
                    </div>

                    <div class="progress-wrap">
                        <h3>Javascript</h3>
                        <div class="progress">
                            <div class="progress-bar color4" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                <span class="bar-width">90%</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!--/.col-sm-6-->

            <div class="col-sm-6 wow fadeInDown">
                <div class="skill">
                    <div class='div-h2'>&nbsp;</div>

                    <div class="progress-wrap">
                        <h3>Database</h3>
                        <div class="progress">
                            <div class="progress-bar  color1" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                                <span class="bar-width">90%</span>
                            </div>
                        </div>
                    </div>

                    <div class="progress-wrap">
                        <h3>C++, C</h3>
                        <div class="progress">
                            <div class="progress-bar color2" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                <span class="bar-width">88%</span>
                            </div>
                        </div>
                    </div>

                    <div class="progress-wrap">
                        <h3>Java</h3>
                        <div class="progress">
                            <div class="progress-bar color3" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                <span class="bar-width">80%</span>
                            </div>
                        </div>
                    </div>

                    <div class="progress-wrap">
                        <h3>Wordpress</h3>
                        <div class="progress">
                            <div class="progress-bar color4" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                <span class="bar-width">95%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#middle-->

<section id="conatcat-info">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="pull-left">
                        <a href="tel:<?=Yii::$app->setting->get('mobile')?>">
                            <i class="fa fa-phone"></i>
                            </a>
                    </div>
                    <div class="media-body">
                        <div class='div-h2'>技术咨询</div>
                        <p><?=Yii::$app->getTextBlock('home-contact-content')->content?>
                            <a href="tel:<?=Yii::$app->setting->get('mobile')?>">
                                <?=Yii::$app->setting->get('mobile')?>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.container-->
</section><!--/#conatcat-info-->
