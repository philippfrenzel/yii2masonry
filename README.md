yii2masonry

===============

Widget for masonry.js pinterest like layout container for Yii Framework 2
Original sources for the jquery plugin: http://masonry.desandro.com/

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
On a page with a ListView, just add:


```php
<?php echo \philippfrenzel\yii2masonry\yii2masonry::widget([
    'clientOptions' => [
        'columnWidth' => 5,
        'itemSelector' => '.item'
    ]
]); ?>
```

Size of columns can be defined within css
```css
  .item { width: 25%; }
  .item.w2 { width: 50%; }
```

