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
class FlashAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "flash/css/bootstrap4.css",

    ];
    public $js = [
        "flash/js/bootstrap.min.js",
        "flash/js/device.js",
        "flash/js/jquery-1.10.2.min.js",
    ];
    public $depends = [

    ];
}
