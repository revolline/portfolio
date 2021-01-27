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
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://fonts.googleapis.com/css2?family=Open+Sans&display=swap',
        'lib/toastr/toastr.css',
        'css/bootstrap.css',
        '/lib/owl_carousel/owl.carousel.css',
        'css/style.css',
    ];
    public $js = [
        'js/bootstrap.js',
        'js/move-top.js',
        'lib/toastr/toastr.min.js',
        'js/easing.js',
        '/lib/owl_carousel/owl.carousel.js',
        'js/site.js',
    ];
    public $depends = [
        'yii\web\YiiAsset'
    ];
}
