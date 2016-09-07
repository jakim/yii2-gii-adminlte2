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

Once the extension is installed, simply use it in your code by  :

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

![Index](https://cloud.githubusercontent.com/assets/839118/18304750/75496518-74e4-11e6-9cd1-0e8d8dcef2a6.png)
![Form](https://cloud.githubusercontent.com/assets/839118/18304751/75657a64-74e4-11e6-94de-2c92cc4e9c59.png)
