yii2masonry

===============

Widget for masonry.js pinterest like layout container for Yii Framework 2

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

You may also check the package information on [packagist](https://packagist.org/packages/philippfrenzel/yii2masonry).

Usage
-----

```php
<?php echo \philippfrenzel\yii2extblocksit\yii2masonry::widget([
    'clientOptions' => [
		'numOfCol' => 5,
        'offsetX' => 5,
        'offsetY' => 5,
        'blockElement' => 'site_index'
    ]
]); ?>
```