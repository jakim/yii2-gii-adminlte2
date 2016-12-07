Generators with AdminLTE2 template
==================================
Generators with AdminLTE2 template

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist jakim-pj/yii2-gii-adminlte2
```

or add

```
"jakim-pj/yii2-gii-adminlte2": "^1.0"
```

to the require section of your `composer.json` file.


Usage
-----

Add to: `config/web.php`

```php
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        'generators' => [
            'crud' => [
                'class' => 'yii\gii\generators\crud\Generator',
                'template' => 'adminLte2',
                'templates' => [
                    'adminLte2' => '@vendor/jakim-pj/yii2-gii-adminLte2/generators/crud/',
                ]
            ]
        ],
    ];
```

Copy and customize main layout:

`examples/views/layouts/main.php`
