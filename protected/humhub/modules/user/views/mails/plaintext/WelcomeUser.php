<?php


use yii\helpers\Html;

/* @var $registrationUrl string */

?>
<?= mb_strtoupper(Yii::t('UserModule.base', 'Welcome to %appName%', ['%appName%' => Yii::$app->name])) ?>


<?= Yii::t('UserModule.base',
    '%userId%, welcome to %appName%! Your account has been created. Please click on the button below to login.',
    ['%appName%' => Yii::$app->name, '%userId%' => $userId]); ?>


<?= Yii::t('UserModule.base', 'Login') ?>: <?= $loginUrl ?>
