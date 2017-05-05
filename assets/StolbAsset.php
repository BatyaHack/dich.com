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
class StolbAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "stolb/bootstrap3.css",

    ];
    public $js = [
        "stolb/bootstrap.min.js",
        "stolb/device.js",
        "stolb/js/jquery-1.10.2.min.js",
    ];
    public $depends = [

    ];
}
