<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://fonts.googleapis.com/css2?family=Open+Sans&display=swap',
        'lib/toastr/toastr.css',
        'css/bootstrap.css',
        'css/owl.carousel.css',
        'css/style.css',
    ];
    public $js = [
       // 'js/jquery.min.js',
        'js/bootstrap.js',
        //'js/easyResponsiveTabs.js',
        'js/move-top.js',
        'lib/toastr/toastr.min.js',
        'js/easing.js',
        'js/owl.carousel.js',
        'js/site.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
