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
                    <div class="social">
                        <ul class="social-share">
                            <li><a href="<?=Yii::$app->setting->get('facebook')?>"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="<?=Yii::$app->setting->get('twitter')?>"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="<?=Yii::$app->setting->get('linkedin')?>"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="<?=Yii::$app->setting->get('dribbble')?>"><i class="fa fa-weixin"></i></a></li>
                            <li><a href="<?=Yii::$app->setting->get('skype')?>"><i class="fa fa-skype"></i></a></li>
                        </ul>

                        <div class="search">
                            <?php if (Yii::$app->user->isGuest) { ?>
                                <i class="fa fa-user"></i><a class="uk-icon-user"  href="<?= Yii::$app->urlManager->createAbsoluteUrl(['blog/default/signin']) ?>" rel="nofollow">请登录</a><s>|</s><a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['blog/default/signup']) ?>" rel="nofollow">免费注册</a>
                            <?php } else { ?>
                                <i class="fa fa-user"></i><a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['blog/default/usercentre']) ?>">
                                    <?= isset(Yii::$app->user->identity->profile->surname) ? Yii::$app->user->identity->profile->surname : Yii::$app->user->identity->username ?></a>&nbsp;[<a href="<?= Yii::$app->urlManager->createUrl(['blog/default/logout']) ?>">退出</a>]
                            <?php } ?>

                            <!--form action="<?= Yii::$app->urlManager->createUrl(['/blog/default/catalog']) ?>" method="get" id="search_fmr" name="search_fmr" role="form">
                                <input class="search-form" autocomplete="off" type="text" name="keyword" id="searchText" placeholder="搜索博客"/>
                                <i class="fa fa-search"></i>
                            </form-->
                        </div>
                    </div>
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
                <a class="navbar-brand" href="<?=Yii::$app->homeUrl?>">
                    <img src="<?='/'.Yii::$app->getImages('logo')->image?>" alt="<?=Yii::$app->setting->get('siteName')?>">
                </a>
            </div>

            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <?php foreach(Yii::$app->getCatalogs() as $item) {?>
                        <li>
                            <a href="<?=$item['url']?>">
                                <?=$item['surname']?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div><!--/.container-->
    </nav><!--/nav-->

</header><!--/header-->

