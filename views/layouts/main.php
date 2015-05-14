<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;


/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
    <div class="wrap">
        <?php

            NavBar::begin([
                'brandLabel' => 'Hypertrophia',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [

                    ['label' => 'Inicio', 'url' => ['/site/index']],
                    ['label' => '¿Quienes Somos?', 'url' => ['/site/about']],
                    ['label' => 'Clases', 'url' => ['/site/about2']],
                     ['label' => 'BLOG', 'url' => ['/site/about3']],
                    ['label' => 'Contacto', 'url' => ['/site/contact']],


                    ['label' => 'Administrar', 'items'=> [
                        ['label' => 'Disciplina', 'url' => ['/disciplina/index']],
                        ['label' => 'Clases', 'url' => ['/clase/index']],
                        ['label' => 'Socios', 'url' => ['/socio/index']],
                        ['label' => 'Pagos', 'url' => ['/pago/index']],
                        ['label' => 'Progresos', 'url' => ['/progreso/index']],
                        ['label' => 'Horarios', 'url' => ['/horario/index']],
                        ['label' => 'Sueldos', 'url' => ['/sueldo/index']],
                        ['label' => 'Profesores', 'url' => ['/profesor/index']],
                        ['label' => 'Tipo de profesores', 'url' => ['/tipo-profesor/index']],
                        ['label' => 'Informes medicos', 'url' => ['/informe-medico/index']],

                    ]],

                    Yii::$app->user->isGuest ?
                        ['label' => 'Iniciar Sesión', 'url' => ['/user/login']] :
                        ['label' => 'Cierrar Sesión (' . Yii::$app->user->displayName . ')',
                            'url' => ['/user/logout'],
                            'linkOptions' => ['data-method' => 'post']],
                ],
            ]);
            NavBar::end();
        ?>

        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= $content ?>
        </div>
    </div>

    <footer class="container">
    <div class="jumbotron">
    <div class="col-md-4 col-md-offset-4">
    <table >
    <tr>
        <td><a href="http://www.facebook.com/"><img src="img/facebook.png"></a></td>
        <td><a href="http://www.twitter.com/"><img src="img/twitter.png"></a></td>
        <td><a href="https://plus.google.com/"><img src="img/googleplus.png"></a></td>
        <td><a href="http://www.youtube.com/"><img src="img/youtube.png"></a></td>
    </tr>
    </table>
    </div>
    </div>
    </footer>



<!--
    <footer class="container">

        <div class="col-md-3"> <a href="http://www.us.powerade.com/"><img src="img/Power-Logo2.png"></a></div>
        <div class="col-md-3"> <a href="http://www.adidas.com/"><img src="img/adidas-logo2.png"></a></div>

        <div class="col-md-3"> <a href="http://www.us.powerade.com/"><img src="img/Power-Logo2.png"></a></div>
        <div class="col-md-3"> <a href="http://www.adidas.com/"><img src="img/adidas-logo2.png"></a></div>

    </footer>
    -->

    <footer class="footer">




        <div class="container">
            <p class="pull-left">&copy; TISW_GRUPO2 IECI <?= date('Y') ?></p>
            <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

