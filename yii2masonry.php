<?php

namespace yii2masonry;

use Yii;
use yii\web\View;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\base\Widget as Widget;

 /**
 * this widget allows you to include a pinterest like layout container to your site
 * @copyright Frenzel GmbH - www.frenzel.net
 * @link http://www.frenzel.net
 * @author Philipp Frenzel <philipp@frenzel.net>
 *
 */

class yii2masonry extends Widget
{

    /**
    * @var array the HTML attributes (name-value pairs) for the field container tag.
    * The values will be HTML-encoded using [[Html::encode()]].
    * If a value is null, the corresponding attribute will not be rendered.
    */
    public $options = array();


    /**
    * @var array all attributes that be accepted by the plugin, check docs!
    */
    public $clientOptions = array(
        'itemSelector' => '.item',
        'columnWidth'  => 200
    );


    /**
     * Initializes the widget.
     * If you override this method, make sure you call the parent implementation first.
     */
    public function init()
    {
        ob_start();
        ob_implicit_flush(false);

        //checks for the element id
        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }
        
        parent::init();
    }

    /**
     * Renders the widget.
     */
    public function run()
    {        
        $masonry = ob_get_clean();
        echo Html::beginTag('div', $this->options); //opens the container
            echo $masonry;
        echo Html::endTag('div'); //closes the container, opened on init
        $this->registerPlugin();
    }

    /**
    * Registers the widget and the related events
    */
    protected function registerPlugin()
    {
        $id = $this->options['id'];

        //get the displayed view and register the needed assets
        $view = $this->getView();
        yii2masonryAsset::register($view);
        yii2imagesloadedAsset::register($view);

        $js = array();
        
        $options = Json::encode($this->clientOptions);
        $js[] = "var mscontainer$id = $('#$id');";
        $js[] = "var msnry$id = mscontainer$id.masonry($options);";
        $js[] = "msnry$id.imagesLoaded(function(){  msnry$id.masonry(); });";

        $view->registerJs(implode("\n", $js),View::POS_READY);
    }

}
