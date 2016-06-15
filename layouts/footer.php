<?php
/**
 * Created by PhpStorm.
 * User: qiang
 * Date: 6/9/16
 * Time: 5:16 PM
 */
?>


<footer id="footer" class="midnight-blue">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                &copy; <?=date('Y')?> <a target="_blank" href="/" title="<?=Yii::$app->setting->get('copyright')?>">chinasoftware.co.uk</a>. <?=Yii::$app->setting->get('copyright') ?>
            </div>
            <div class="col-sm-6">
                <ul class="pull-right">
                    <?php foreach(Yii::$app->getCatalogs() as $item) {?>
                        <li>
                            <a href="<?=$item['url']?>">
                                <?=$item['surname']?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</footer><!--/#footer-->


<?php
$google_analysis = Yii::$app->getHtmlBlock('google-analysis');

if($google_analysis != null){
    echo($google_analysis->content);
}
?>