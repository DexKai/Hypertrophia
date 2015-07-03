<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SueldoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sueldos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sueldo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Sueldo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],


            'pRO.PRO_nombre',
            'SUE_sueldo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
