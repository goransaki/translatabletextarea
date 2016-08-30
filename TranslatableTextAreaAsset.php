<?php
/**
 * Created by PhpStorm.
 * User: Goran Sarenac <goransarenac91@hotmail.com>
 * Date: 8/15/2016
 * Time: 3:20 PM
 */

namespace goran-saki/translatable-text-area;

use yii\web\AssetBundle;

class TranslatableTextAreaAsset extends AssetBundle
{
    public $sourcePath = __DIR__;

    public $js = [];

    public $css = [
        'css/translatable-text-area.css',
    ];

    public $depends = [];
}
