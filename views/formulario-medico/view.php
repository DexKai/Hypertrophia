<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\FormularioMedico */

$this->title = $model->FM_id;
$this->params['breadcrumbs'][] = ['label' => 'Formulario Medicos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="formulario-medico-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->FM_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->FM_id], [
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
            'FM_id',
            'FM_cardiacas',
            'FM_alegias',
            'FM_osea',
            'FM_muscular',
            'FM_asfixia',
            'FM_embarazada',
            'FIM_anemia',
            'FM_alergia',
            'FM_medicamentos:ntext',
        ],
    ]) ?>

</div>
