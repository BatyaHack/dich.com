<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class MultiAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "multi/static/css/bootstrap.min.css",
        "multi/static/css/custom.min.css",
        "multi/static/css/style2.css",
        "multi/static/custom/css/chosen.css",
        "multi/static/custom/css/daterangepicker.css",
    ];
    public $js = [
        "multi/static/js/bootstrap.min.js",
        "multi/static/js/custom.js",
        "multi/static/js/device.js",
        "multi/static/js/jquery-1.10.2.min.js",
    ];
    public $depends = [

    ];
}
