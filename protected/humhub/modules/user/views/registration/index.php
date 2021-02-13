<?php

use yii\helpers\Html;

$this->pageTitle = Yii::t('UserModule.auth', 'Create Account');
?>

<div class="container" style="text-align: center;">
    <h1 id="app-title" class="animated fadeIn"><?php echo Html::encode(Yii::$app->name); ?></h1>
    <br/>
    <div class="row">
        <div id="create-account-form" class="panel panel-default animated bounceIn" style="max-width: 500px; margin: 0 auto 20px; text-align: left;">
            <div class="panel-heading"><?php echo Yii::t('UserModule.auth', '<strong>Account</strong> registration'); ?></div>
            <div class="panel-body">
                <?php $form = \yii\bootstrap\ActiveForm::begin(['id' => 'registration-form', 'enableClientValidation' => false]); ?>
                <?= $hForm->render($form); ?>
                <?php \yii\bootstrap\ActiveForm::end(); ?>

                <!-- souls -->
                <br>
                <p class="lead">
                    <?= Yii::t('UserModule.base', 'A baseline measurement of your mental influence will be taken. Focus on what a wonderful human being you are as you press that button!') ?>
                </p>
            </div>
        </div>
    </div>
</div>

<script <?= \humhub\libs\Html::nonce() ?>>
    $(function () {
        // set cursor to login field
        // souls
        // $('#User_username').focus();
        // $('#password-newpassword').focus();

        // souls
        $('#user-username').attr('readonly', true);

        // souls
        // insert refresh icon to load a new randomly generated username
        $('.field-user-username').prepend('<div style="position: absolute; right: 18px; padding: 4px; font-size: 19px; cursor: pointer; top: 136.5px;"><i class="fa fa-refresh" onClick="window.location.reload();"></i></div>');

        // set user time zone val
        $('#user-time_zone').val(Intl.DateTimeFormat().resolvedOptions().timeZone);
    })

    // Shake panel after wrong validation
<?php foreach ($hForm->models as $model) : ?>
    <?php if ($model->hasErrors()) : ?>
            $('#create-account-form').removeClass('bounceIn');
            $('#create-account-form').addClass('shake');
            $('#app-title').removeClass('fadeIn');
    <?php endif; ?>
<?php endforeach; ?>

</script>
