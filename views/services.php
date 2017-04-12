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
                        <h2><a href="<?=Yii::$app->urlManager->getHostInfo().Yii::$app->homeUrl?>">网站设计</a>,<a href="<?=Yii::$app->urlManager->getHostInfo().Yii::$app->homeUrl?>">网站开发<a href="<?=Yii::$app->urlManager->getHostInfo().Yii::$app->homeUrl?>"></h2>
                        <h3>响应式布局设计，适用多种设备，高精度展示</h3>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-apple"></i>
                        <h2>行业网站设计，快速网页设计</h2>
                        <h3>内建餐饮，留学，旅游，中医，SPA，商城等系统</h3>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-weixin"></i>
                        <h2>微信应用开发和整合</h2>
                        <h3>微网页开发，微信公众号申请，对接，微信应用开发</h3>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-cloud"></i>
                        <h2>域名，空间和服务器管理</h2>
                        <h3>域名申请，云空间的申请和管理</h3>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-server"></i>
                        <h2>网站管理和运维</h2>
                        <h3>网站运维，监控，分析，事故处理，速度优化</h3>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                  <div class="feature-wrap">
                    <i class="fa fa-google"></i>
                    <h2>搜索引擎优化和网络推广</h2>
                    <h3>针对华人企业提供谷歌，百度SEO推广，网站流量监控</h3>
                  </div>
                </div>
                <!--/.col-md-4-->

            </div><!--/.services-->
        </div><!--/.row-->


        <div class="get-started center wow fadeInDown">
            <h2>这不是一次性的开发，而是长久的承诺</h2>
            <p class="lead">
                软件和网站虽然是一次性的完成，可是不同专业程度完成的质量参差不齐，
                <br>选择一个稳定的，长期，可靠，安全的负责人的团队来执行是至关紧要的。
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
            <?php
                $clients = Yii::$app->getImageByGroup('clients');
                foreach($clients as $item){
                    ?>
                    <div class="col-md-4 wow fadeInDown">
                        <div class="clients-comments text-center">
                            <img src="<?=Yii::$app->urlManager->getHostInfo().'/'.$item->image?>" class="img-circle" alt="">
                            <h3>
                                <?=$item->description?>
                            </h3>
                            <h4><span>-<?=$item->name?></span></h4>
                        </div>
                    </div>
                <?php } ?>
        </div>

    </div><!--/.container-->
</section><!--/#feature-->


