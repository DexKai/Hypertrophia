<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SocioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Socios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="socio-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Socio', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          ///'SO_id',
           // 'PROG_id',
           // 'IM_id',
            //'PA_id',
             'SO_rut',
             'SO_nombre',
             'SO_apellido_materno',
             'SO_apellido_paterno',
            // 'SO_email:email',
            // 'SO_direccion',
            'SO_estado_actividad',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
