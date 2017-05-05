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
class SlowAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "slow/static/css/bootstrap3.css",

    ];
    public $js = [
        "slow/static/js/bootstrap.min.js",
        "slow/static/js/device.js",
        "slow/static/js/jquery-1.10.2.min.js",
    ];
    public $depends = [

    ];
}
