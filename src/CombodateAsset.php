<?php

namespace mikk150\combodate;

use yii\web\AssetBundle;

/**
* 
*/
class CombodateAsset extends AssetBundle
{
    public $sourcePath = '@bower/combodate/src';

    public $depends = [
        'omnilight\assets\MomentLanguageAsset',
        'yii\web\JqueryAsset'
    ];

    public $js = [
        'combodate.js'
    ];
}