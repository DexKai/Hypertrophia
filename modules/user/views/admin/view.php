<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var app\modules\user\models\User $user
 */

$this->title = $user->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('user', 'Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('user', 'Actualizar'), ['update', 'id' => $user->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('user', 'Borrar'), ['delete', 'id' => $user->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('user', '¿Estas seguro que deseas borrar este item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $user,
        'attributes' => [
            //'id',
            //'role_id',
            //'status',
            'email:email',
            //'new_email:email',
            'username',
            //'profile.full_name',
            //'password',
            //'auth_key',
            //'api_key',
            //'login_ip',
            //'login_time',
            //'create_ip',
            //'create_time',
            //'update_time',
            //'ban_time',
            //'ban_reason',
            //'sO.SO_rut',
            //'sO.SO_nombre',
            //'sO.SO_apellido_materno',
            //'sO.SO_apellido_paterno',
            //'sO.SO_direccion',
        ],
    ]) ?>

</div>
