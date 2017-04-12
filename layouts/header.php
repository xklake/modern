<?php
/**
 * Created by PhpStorm.
 * User: qiang
 * Date: 6/9/16
 * Time: 5:16 PM
 */
?>

<header id="header">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-4">
                    <div class="top-number">
                        <p>
英国中软软件
                        </p>
                    </div>
                </div>

                <div class="col-sm-6 col-xs-8">
                  <span>15年专注英国网站设计,软件开发</span>                  
                </div>
            </div>
        </div><!--/.container-->
    </div><!--/.top-bar-->

    <nav class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?=Yii::$app->urlManager->getHostInfo().Yii::$app->homeUrl?>">
                    <img src="<?=Yii::$app->urlManager->getHostInfo().'/'.Yii::$app->getImages('logo')->image?>" alt="网站设计">
                    </a>
            </div>

            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <?php foreach(Yii::$app->getCatalogs() as $item) {?>
                        <li>
                            <a href="<?=Yii::$app->urlManager->getHostInfo().$item['url']?>">
                                <?=$item['surname']?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div><!--/.container-->
    </nav><!--/nav-->

</header><!--/header-->

