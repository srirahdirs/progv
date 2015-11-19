<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAssetLogin extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/custom.css',
        'materialize/css/materialize.css',
        'materialize/css/style.css',
        'materialize/css/page-center.css',
        'materialize/css/prism.css',
        'materialize/js/plugins/perfect-scrollbar/perfect-scrollbar.css',
        
    ];
    public $js = [
        'materialize/js/jquery-1.11.2.min.js',
        'materialize/js/materialize.js',
        'materialize/js/prism.js',
        'materialize/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js',
        'materialize/js/plugins.js',
    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];

}
