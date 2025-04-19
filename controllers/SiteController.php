<?php

namespace app\controllers;

use app\models\Contribution;
use app\models\ContributionsType;
use app\models\Dependant;
use app\models\Messages;
use app\models\Report;
use app\models\User;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\ContributionSearch;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
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
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }


    /**
     * {@inheritdoc}
     */
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

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {

        $this->layout = 'mainnew';

        if (Yii::$app->user->isGuest) {
            return $this->redirect(['site/login']);
        }
        $searchModel = new ContributionSearch();
        $dataProvider = $searchModel->searchRecent();

        $washarika = User::find()->count();
        $tegemezi = Dependant::find()->count();
        $matoleo = Contribution::find()->count();
        $ainamatoleo = ContributionsType::find()->count();
        $ujumbe = Messages::find()->count();



        return $this->render(
            'index',
            [
                'dataProvider' => $dataProvider,
                'washarika' => $washarika,
                'tegemezi' => $tegemezi,
                'matoleo' => $matoleo,
                'ainamatoleo' => $ainamatoleo,
                'ujumbe' => $ujumbe
            ]
        );
    }

    /**
     * Login action.
     *
     * @return Response|string
     */



    public function actionLogin()
    {
        $this->layout = 'mainlogin';

        if (!Yii::$app->user->isGuest) {
            return $this->redirect('index');
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            // return $this->goBack();
            return $this->redirect('index');
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->redirect('login');
        //return $this->goHome();

    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }


    /**
     * Displays Report page.
     *
     * @return Response|string
     */
    public function actionReport()
    {
        $model = new Report();

        return $this->render('report', [
            'model' => $model,
        ]);
    }


}
