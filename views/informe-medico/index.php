<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\InformeMedicoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Informe Medicos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="informe-medico-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Informe Medico', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IM_id',
            'SO_id',
            'PRO_id',
            'IM_cardiacas',
            'IM_cardicas_detalle:ntext',
            // 'IM_alergias',
            // 'IM_alergia_detalle:ntext',
            // 'IM_osea',
            // 'IM_osea_detalle:ntext',
            // 'IM_muscular',
            // 'IM_muscualr_detalle:ntext',
            // 'IM_asfixia',
            // 'IM_embarazada',
            // 'IM_anemia',
            // 'IM_medicamentos:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
