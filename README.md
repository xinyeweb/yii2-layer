yii2-layer
==========
yii2-layer

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist xinyeweb/yii2-layer:dev-master
```

or add

```
"xinyeweb/yii2-layer": "dev-master"
```

to the require section of your `composer.json` file.


Usage
-----
pc版本 http://layer.layui.com/
```php
    <?php \xinyeweb\layer\LayerAsset::register($this); ?>
```
mobile版本 http://layer.layui.com/mobile/
```php
    <?php \xinyeweb\layer\LayerMobileAsset::register($this); ?>
```

