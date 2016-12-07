<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */

\app\modules\admin\ModuleAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:100,200,300,400,600" rel="stylesheet"
          type="text/css">
    <?php $this->head() ?>
</head>
<body class="login-page">

<?php $this->beginBody() ?>
<div class="login-box">
    <div class="login-box-body">

        <?= \dmstr\widgets\Alert::widget() ?>
        <?= $content ?>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
