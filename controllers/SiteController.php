<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{

    
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }
//Quienes Somos
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionMision()
    {
        return $this->render('mision');
    }

    public function actionVision()
    {
        return $this->render('vision');
    }

    public function actionValores()
    {
        return $this->render('valores');
    }
//Clases
    public function actionClases()
    {
        return $this->render('clases');
    }

    public function actionClases2()
    {
        return $this->render('clases2');
    }

    public function actionClases3()
    {
        return $this->render('clases3');
    }

    public function actionVision2()
    {
        return $this->render('vision2');
    }

    public function actionValores2()
    {
        return $this->render('valores2');
    }


    /////////////////////////

     public function actionAbout3()
    {
        return $this->render('about3');
    }

    public function actionMision3()
    {
        return $this->render('mision3');
    }

    public function actionVision3()
    {
        return $this->render('vision3');
    }

    public function actionValores3()
    {
        return $this->render('valores3');
    }

}
