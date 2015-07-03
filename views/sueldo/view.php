<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Sueldo */

//$this->title = $model->SUE_id;
$this->params['breadcrumbs'][] = ['label' => 'Sueldos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sueldo-view">



    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->SUE_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->SUE_id], [
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

            'pRO.PRO_nombre',
            'SUE_sueldo',
        ],
    ]) ?>

</div>
