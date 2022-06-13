<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'custom/vendors/switchery/dist/switchery.min.css',
        'custom/build/css/custom.min.css',
        'custom/vendors/iCheck/skins/flat/green.css',

    ];
    public $js = [
        'custom/vendors/switchery/dist/switchery.min.js',
        'custom/vendors/iCheck/icheck.min.js',
    ];
    public $depends = [
        'yiister\gentelella\assets\ThemeAsset',
        'yiister\gentelella\assets\ExtensionAsset',
    ];
}
