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
class PenAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "pen/static/css/bootstrap.min.css",
        "pen/static/css/custom.min.css",
    ];
    public $js = [
        "pen/static/js/bootstrap.min.js",
        "pen/static/js/custom.js",
        "pen/static/js/jquery-1.10.2.min.js",
    ];
    public $depends = [

    ];
}
