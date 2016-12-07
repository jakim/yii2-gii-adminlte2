<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

$this->title = 'Sign In';

$fieldOptions1 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-user form-control-feedback'></span>",
];

$fieldOptions2 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-lock form-control-feedback'></span>",
];
?>

<p class="login-box-msg">Sign in to the CMS</p>

<?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

<?= $form
    ->field($model, 'email', $fieldOptions1)
    ->label(false)
    ->textInput(['placeholder' => $model->getAttributeLabel('email')]) ?>

<?= $form
    ->field($model, 'password', $fieldOptions2)
    ->label(false)
    ->passwordInput(['placeholder' => $model->getAttributeLabel('password')]) ?>

<div class="row">
    <div class="col-xs-8">
        <?= $form->field($model, 'rememberMe')->checkbox() ?>
    </div>

    <div class="col-xs-4">
        <?= Html::submitButton('Sign in', ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'login-button']) ?>
    </div>
</div>


<?php ActiveForm::end(); ?>

<?= Html::a('I forgot my password', ['request-password-reset']) ?>
<br>
