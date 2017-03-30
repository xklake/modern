<?php
/**
 * Created by PhpStorm.
 * User: qiang
 * Date: 06/09/16
 * Time: 3:40 PM
 */

namespace frontend\web\template\modern;
use yii\web\AssetBundle;


class ModernAssets extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/modern/assets';


    public $css = [
        'css/bootstrap.min.css',
        'css/font-awesome.css',
        'css/prettyPhoto.css',
        'css/animate.min.css',
        'css/main.css',
        'css/responsive.css',
    ];

    public $js = [
        //'js/jquery.js',
        'js/bootstrap.min.js',
        'js/jquery.prettyPhoto.js',
        'js/jquery.isotope.min.js',
        'js/main.js',
        'js/wow.min.js',
    ];

    public $depends = [
        // 'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
    ];
}
