CYii Widget
===========

Add a [c3.js](http://c3js.org/) chart to your Yii2 app.

Installation
------------

Run
```
php composer.phar require --prefer-dist jspaine/cyii "dev-master"
```

or add
```
"jspaine/cyii": "dev-master"
```

to the require section of your `composer.json`


Use
---
In your view file:
```php
use jspaine\cyii\CYii;

<?= CYii::widget([
    'options' => [
        'data' => [
            'x' => 'x',
            'columns' => [
                ['x', 30, 50, 100, 230, 300, 310],
                ['data1', 30, 200, 100, 400, 150, 250],
                ['data2', 130, 300, 200, 300, 250, 450],
            ],
        ]
    ],
    'htmlOptions' => ['id' => 'testchart'],
]); ?>
```

Options can also be passed as a JSON string.
