<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Socio */


$this->params['breadcrumbs'][] = ['label' => 'Socios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="socio-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('actualizar', ['update', 'id' => $model->SO_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('borrar', ['delete', 'id' => $model->SO_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Estas seguro que deseas borrar este item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [

            'SO_rut',
            'SO_nombre',

            'SO_apellido_paterno',
            'SO_apellido_materno',
            'SO_email:email',
            'SO_direccion',
            'SO_estado_actividad',
        ],
    ]) ?>

</div>
