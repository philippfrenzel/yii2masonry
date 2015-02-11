yii2masonry

===============

Widget for masonry.js pinterest like layout container for Yii Framework 2
Original sources for the jquery plugin: http://masonry.desandro.com/

[![Latest Stable Version](https://poser.pugx.org/philippfrenzel/yii2masonry/v/stable.svg)](https://packagist.org/packages/philippfrenzel/yii2masonry)
[![Build Status](https://travis-ci.org/philippfrenzel/yii2masonry.svg?branch=master)](https://travis-ci.org/philippfrenzel/yii2masonry)
[![Code Climate](https://codeclimate.com/github/philippfrenzel/yii2masonry.png)](https://codeclimate.com/github/philippfrenzel/yii2masonry)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/philippfrenzel/yii2masonry/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/philippfrenzel/yii2masonry/?branch=master)
[![Version Eye](https://www.versioneye.com/php/kop:yii2-scroll-pager/badge.svg)](https://www.versioneye.com/php/kop:yii2-scroll-pager)
[![License](https://poser.pugx.org/philippfrenzel/yii2masonry/license.svg)](https://packagist.org/packages/kop/yii2-scroll-pager)

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

Size of columns can be defined within css
```css
  .item { width: 25%; }
  .item.w2 { width: 50%; }
```

