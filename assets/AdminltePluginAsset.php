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
        'iCheck/square/blue.css',
        'bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'
    ];
    public $js = [
        'iCheck/icheck.min.js',
        'bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js',
        'slimScroll/jquery.slimscroll.min.js'
    ];

    public $depends = [
        'bright_tech\yii2theme\adminlte\assets\AdminlteAsset'
    ];

}
