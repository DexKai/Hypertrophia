<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$role = Yii::$app->getModule("user")->model("Role");

/**
 * @var yii\web\View $this
 * @var app\modules\user\models\User $user
 * @var app\modules\user\models\Profile $profile
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($user, 'email')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($user, 'username')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($user, 'newPassword')->passwordInput() ?>

    <?php //$form->field($profile, 'full_name'); ?>

    <?= $form->field($user, 'role_id')->dropDownList($role::dropdown()); ?>

    <?= $form->field($user, 'status')->dropDownList($user::statusDropdown()); ?>

    <?php // use checkbox for ban_time ?>
    <?php // convert `ban_time` to int so that the checkbox gets set properly ?>
    <?php //$user->ban_time = $user->ban_time ? 1 : 0 ?>
    <?php //Html::activeLabel($user, 'ban_time', ['label' => Yii::t('user', 'Banned')]); ?>
    <?php //Html::activeCheckbox($user, 'ban_time'); ?>
    <?php //Html::error($user, 'ban_time'); ?>

    <?php //$form->field($user, 'ban_reason'); ?>

    <?php //SOCIO ?>

    <?= $form->field($socio, 'SO_rut')->textInput(array('placeholder' => 'ejemplo: 12345678-5')) ?>

    <?= $form->field($socio, 'SO_nombre')->textInput(['maxlength' => 256]) ?>

    <?= $form->field($socio, 'SO_apellido_paterno')->textInput(['maxlength' => 256]) ?>

    <?= $form->field($socio, 'SO_apellido_materno')->textInput(['maxlength' => 256]) ?>

    <?= $form->field($socio, 'SO_direccion')->textInput(['maxlength' => 256]) ?>



    <div class="form-group">
        <?= Html::submitButton($user->isNewRecord ? Yii::t('user', 'Create') : Yii::t('user', 'Update'), ['class' => $user->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
