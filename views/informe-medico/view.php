<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\InformeMedico */

$this->title = $model->IM_id;
$this->params['breadcrumbs'][] = ['label' => 'Informe Medicos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="informe-medico-view">



    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IM_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IM_id], [
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
            'IM_cardiacas',
            'IM_cardicas_detalle:ntext',
            'IM_alergias',
            'IM_alergia_detalle:ntext',
            'IM_osea',
            'IM_osea_detalle:ntext',
            'IM_muscular',
            'IM_muscualr_detalle:ntext',
            'IM_asfixia',
            'IM_embarazada',
            'IM_anemia',
            'IM_medicamentos:ntext',
        ],
    ]) ?>

</div>
