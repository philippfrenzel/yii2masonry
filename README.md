yii2masonry

===============

Widget for masonry.js pinterest like layout container for Yii Framework 2
Original sources for the jquery plugin: http://masonry.desandro.com/

[![Latest Stable Version](https://poser.pugx.org/philippfrenzel/yii2masonry/v/stable.svg)](https://packagist.org/packages/philippfrenzel/yii2masonry)
[![Build Status](https://travis-ci.org/philippfrenzel/yii2masonry.svg?branch=master)](https://travis-ci.org/philippfrenzel/yii2masonry)
[![Code Climate](https://codeclimate.com/github/philippfrenzel/yii2masonry.png)](https://codeclimate.com/github/philippfrenzel/yii2masonry)
[![Version Eye](https://www.versioneye.com/php/philippfrenzel:yii2masonry/badge.svg)](https://www.versioneye.com/php/philippfrenzel:yii2masonry)
[![License](https://poser.pugx.org/philippfrenzel/yii2masonry/license.svg)](https://packagist.org/packages/philippfrenzel/yii2masonry)

How to install?
---------------

Get it via [composer](http://getcomposer.org/) by adding the package to your `composer.json`:

```json
{
  "require": {
    "philippfrenzel/yii2masonry": "*"
  }
}
```

And ensure, that you have the follwing plugin installed global:

> php composer.phar global require "fxp/composer-asset-plugin:~1.0"

Due to limitations of `fxp/composer-asset-plugin` you also need to add the following section to the `"extra"` section of your `composer.json`

    "asset-repositories": [
      {
        "name": "bower-asset/eventemitter",
        "type": "bower-vcs",
        "url": "git://github.com/Wolfy87/EventEmitter.git"
      }
    ]

You may also check the package information on [packagist](https://packagist.org/packages/philippfrenzel/yii2masonry).


Usage
-----
On a page with a ListView, just add:


```php

<?php \yii2masonry\yii2masonry::begin([
    'clientOptions' => [
        'columnWidth' => 50,
        'itemSelector' => '.item'
    ]
]); ?>

        <div class="item"><h3>Test</h3><p>Und mehr Text</p></div>
        <div class="item"><h3>Test</h3><p>Und mehr Text</p></div>
        <div class="item"><h3>Test</h3><p>Und mehr Text</p></div>
        <div class="item"><h3>Test</h3><p>Und mehr Text</p></div>
        <div class="item"><h3>Test</h3><p>Und mehr Text</p></div>
        <div class="item"><h3>Test</h3><p>Und mehr Text</p></div>
        <div class="item"><h3>Test</h3><p>Und mehr Text</p></div>
        <div class="item"><h3>Test</h3><p>Und mehr Text</p></div>
        <div class="item"><h3>Test</h3><p>Und mehr Text</p></div>
        <div class="item"><h3>Test</h3><p>Und mehr Text</p></div>
        <div class="item"><h3>Test</h3><p>Und mehr Text</p></div>
        <div class="item"><h3>Test</h3><p>Und mehr Text</p></div>

<?php \yii2masonry\yii2masonry::end(); ?>

```
**CSS**

Size of columns can be defined within css
```css
  .item { width: 25%; } //important to define width of all item
  .item.w2 { width: 50%; } //not important if you not use infinite scroll
```

If you have a sidebar resizeble by a button you need to reload the masonry container adding these following code:
```php
<?php
$script = <<< JS
    $('a#menu_toggle').on('click', function() {
        $('.js-masonry').masonry();
    });
JS;
$this->registerJs($script, View::POS_READY);
?>
  
```
My button have an ID name #menu_toggle

Sample with INFINITE SCROLL:
```php
use yii\helpers\Html;
use yii\widgets\ListView;
use yii\web\JsExpression;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PolizzenserviceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$script = <<<SKRIPT
$('#boxes').on('infinitescroll:afterRetrieve', function(){
    msnryWgArbeiten.masonry('reloadItems');
    mscontainerWgArbeiten.imagesLoaded(function(){ msnryWgArbeiten.masonry() });
});

$(document).on('submit', '#WgArbeitenSearchform', function(event) {
  $.pjax.submit(event, '#WgArbeitenPjaxContainer')
});
SKRIPT;
$this->registerJs($script);
    
?>

<?php \yii2masonry\yii2masonry::begin([
    'id' => 'WgArbeiten',
    'clientOptions' => [
        'columnWidth' => 20,
        'itemSelector' => '.flowers'
    ]
]); ?>

<div id="boxes">
<?php $pjax = Pjax::begin(['id'=>'WgArbeitenPjaxContainer']); ?>
<?php echo $this->render('@app/views/arbeiten/_search', ['model' => $searchModel]); ?>
<?= \yii\widgets\ListView::widget([
    'dataProvider' => $dataProvider,
    'itemOptions' => ['class' => 'flowers'],
    'itemView' => '@app/views/arbeiten/iviews/_view',
    'summary' => false,
    'layout' => '{items}<div style="visibility:hidden;">{pager}</div>'
]); ?>

<?php
echo \darkcs\infinitescroll\InfiniteScrollPager::widget([
    'itemSelector' => '.flowers',
    'paginationSelector' => '.pagination',
    'containerSelector' => '#WgArbeitenPjaxContainer',
    'pjaxContainer' => $pjax->id,
    'pagination' => $dataProvider->pagination,
]);
?>
<?php Pjax::end(); ?>    
</div>

<?php \yii2masonry\yii2masonry::end(); ?>
```
