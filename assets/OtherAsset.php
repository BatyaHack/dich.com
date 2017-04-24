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
class OtherAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "otherpage/css/bootstrap.css",
        "otherpage/css/style.css",
        "otherpage/css/font-awesome.css",
        "otherpage/css/fixedhead.css",
        "otherpage/css/contacts.css",
        "otherpage/css/fixedhead.css",
        "otherpage/css/franchise.css",
        "otherpage/css/seminars.css",
        "otherpage/css/styletraining.css",
    ];
    public $js = [
        "otherpage/js/bootstrap.min.js",
        "otherpage/js/jquery.nicescroll.min.js",
        "otherpage/js/wow.min.js",
        "otherpage/js/drop_menu.js",
    ];
}
