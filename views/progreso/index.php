<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProgresoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Progresos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="progreso-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Progreso', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'PROG_id',
            'SO_id',
            'PROG_peso',
            'PROG_altura',
            'PROG_porcentaje_grasa',
            // 'PROG_indice_masa_corporal',
            // 'PROG_fecha_evaluacion',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
