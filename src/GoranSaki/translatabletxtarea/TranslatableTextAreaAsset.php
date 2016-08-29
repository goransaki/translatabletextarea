<?php
/**
 * Created by PhpStorm.
 * User: Goran Sarenac <goransarenac91@hotmail.com>
 * Date: 8/15/2016
 * Time: 3:20 PM
 */

namespace common\widgets\translatabletxtarea;

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