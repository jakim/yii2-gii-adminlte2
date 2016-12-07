<?php
use dmstr\widgets\Alert;
use dmstr\widgets\Menu;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

/* @var \yii\web\View $this */
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
<body class="hold-transition skin-black sidebar-mini">
<?php $this->beginBody() ?>
<div class="wrapper">

    <header class="main-header">
        <?= Html::a('<span class="logo-mini">LTE</span>Admin<strong>LTE</strong>2', Yii::$app->homeUrl, ['class' => 'logo']) ?>
        <nav class="navbar navbar-static-top" role="navigation">

            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">

                <ul class="nav navbar-nav">

                    <li><?= Html::a('Logout', ['/admin/auth/logout']) ?></li>

                </ul>
            </div>
        </nav>
    </header>

    <aside class="main-sidebar">
        <section class="sidebar">
            <?php
            /** @var \app\models\User $identity */
            $identity = Yii::$app->user->identity;
            echo Menu::widget([
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Users', 'url' => ['/admin/users/index'], 'icon' => 'fa fa-users', 'active' => $this->context->id == 'admin'],
                ],
            ]);
            ?>
        </section>
    </aside>

    <div class="content-wrapper">
        <section class="content-header">
            <?php if ($this->title): ?>
                <h1><?= Html::encode($this->title); ?>
                    <?php if (isset($this->params['subTitle'])): ?>
                        <small>
                            <?= Html::encode($this->params['subTitle']) ?>
                        </small>
                    <?php endif; ?>
                </h1>
            <?php endif; ?>

            <?=
            Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                'homeLink' => false,
            ]);
            ?>
        </section>
        <section class="content">
            <?= Alert::widget() ?>
            <?= $content ?>
        </section>
    </div>

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <?= Yii::powered() ?>
        </div>
        <strong>
    </footer>

</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
