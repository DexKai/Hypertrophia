<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Progreso */

$this->title = $model->PROG_id;
$this->params['breadcrumbs'][] = ['label' => 'Progresos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="progreso-view">



    <p>
        <?= Html::a('Update', ['update', 'id' => $model->PROG_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->PROG_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'PROG_id',
            'SO_id',
            'PROG_peso',
            'PROG_altura',
            'PROG_porcentaje_grasa',
            'PROG_indice_masa_corporal',
            'PROG_fecha_evaluacion',
        ],
    ]) ?>

</div>
