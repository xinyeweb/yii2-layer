<?php

/**
 * Created by PhpStorm.
 * User: hoter
 * Date: 2016/4/22
 * Time: 14:30
 */

namespace xinyeweb\layer;

use yii\web\AssetBundle;

class LayerMobileAsset extends AssetBundle
{

    public $css = [];

    public $js = [
        'layer.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public function init() {
        $this->sourcePath = dirname(__FILE__) .DIRECTORY_SEPARATOR . 'assets/layer_mobile';
        parent::init();
    }
}