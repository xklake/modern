<?php
/**
 * Created by PhpStorm.
 * User: qiang
 * Date: 6/10/16
 * Time: 2:25 PM
 */
 use yii;
?>

<section id="error" class="container text-center">
    <h1>哎呀！程序员又得挨骂了......</h1>
    <p>你所链接的网站不存在或者错误，请联系网站负责人或者回到我们的首页。</p>

    <h3>
        <span class="text-primary">点击回到首页，</span><a class="btn btn-primary" href="<?=Yii::$app->urlManager->getHostInfo().'/'.Yii::$app->homeUrl?>">网站设计</a>
    </h3>
</section><!--/#error-->
