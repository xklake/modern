<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */



\frontend\web\template\modern\ModernAssets::register($this);

?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="<?= Html::encode(Yii::$app->params['keywords']) ?>" />
    <meta name="description" content="<?= Html::encode(Yii::$app->params['description']) ?>" />
    <?php 
    $googleverification = Yii::$app->setting->get('google-site-verification');
    if($googleverification != null){ ?>
        <meta name="google-site-verification" content="<?=$googleverification?>" />    
    <?php } ?>
    <meta name="author" content="panda cms">
    <title><?=$this->title?></title>

    <!--[if lt IE 9]>
    <script src="<?=Yii::$app->urlManager->getHostInfo().'/healthgreen/assets/js/html5shiv.js'?>"></script>
    <script src="<?=Yii::$app->urlManager->getHostInfo().'/healthgreen/assets/js/respond.min.js'?>"></script>
    <![endif]-->
    <?php $this->head() ?>
</head><!--/head-->

<body class="homepage">
<?php $this->beginBody() ?>

<?= $this->render('header.php') ?>

<?= $content ?>

<?= $this->render('footer.php') ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
