<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Pago */

$this->title = $model->PA_id;
$this->params['breadcrumbs'][] = ['label' => 'Pagos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pago-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('actualizar', ['update', 'id' => $model->PA_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('borrar', ['delete', 'id' => $model->PA_id], [
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
           // 'PA_id',
            'SO_id',
            
            'PA_pago_mes',
            'PA_monto',
            'PA_fecha_pago',
        ],
    ]) ?>

</div>
