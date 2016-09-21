<?php
/**
 * @author Sam Xiao
 */
namespace bright_tech\yii2theme\adminlte\assets;

use yii\web\AssetBundle;

/**
 *
 * @author
 * @since
 */
class AdminltePluginAsset extends AssetBundle
{

    public $sourcePath = '@vendor/almasaeed2010/adminlte/plugins';
    public $css = [
        'iCheck/square/blue.css'
    ];
    public $js = [
        'iCheck/icheck.min.js'
    ];

    public $depends = [
        'bright_tech\yii2theme\adminlte\assets\AdminlteAsset'
    ];

}
