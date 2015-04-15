<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FormularioMedicoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Formulario Medicos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="formulario-medico-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Formulario Medico', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'FM_id',
            'FM_cardiacas',
            'FM_alegias',
            'FM_osea',
            'FM_muscular',
            // 'FM_asfixia',
            // 'FM_embarazada',
            // 'FIM_anemia',
            // 'FM_alergia',
            // 'FM_medicamentos:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
