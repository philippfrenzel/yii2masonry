<?php
/**
 * @link http://www.frenzel.net/
 * @author Philipp Frenzel <philipp@frenzel.net> 
 */

namespace philippfrenzel\yii2masonry;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class yii2masonryAsset extends AssetBundle
{
    public $sourcePath = '@bower/masonry';

    /**
     * [$autoGenerate description]
     * @var boolean
     */
    public $autoGenerate = true;
    
    public $css = array();
    
    public $js = array(
        'masonry.js'
    );

    public $depends = array(
        'yii\web\JqueryAsset',
    );
}
