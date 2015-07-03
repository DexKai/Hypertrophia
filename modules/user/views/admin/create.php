<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\modules\user\models\User $user
 * @var app\modules\user\models\Profile $profile
* @var app\models\Socio $socio
 */

$this->title = Yii::t('user', 'Crear {modelClass}', [
  'modelClass' => 'Usuario',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('user', 'Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'user' => $user,
        //'profile' => $profile,
        'socio' => $socio,
    ]) ?>

</div>