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

          
            'PRO_id',
        

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
