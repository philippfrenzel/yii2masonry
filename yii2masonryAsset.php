<?php

namespace yii2masonry;

use yii\web\AssetBundle;

/**
 * @link http://www.frenzel.net/
 * @author Philipp Frenzel <philipp@frenzel.net> 
 */

class yii2masonryAsset extends AssetBundle
{
    public $sourcePath = '@bower';

    /**
     * [$autoGenerate description]
     * @var boolean
     */
    public $autoGenerate = true;
    
    public $css = array();
    
    public $js = array(
        'imagesloaded/imagesloaded.pkgd.min.js',
        'masonry/dist/masonry.pkgd.js'
    );

    public $depends = array(
        'yii\web\JqueryAsset',
    );
}
