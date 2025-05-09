<?php

namespace app\controllers;

use Yii;
use app\models\Contribution;
use app\models\ContributionSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


/**
 * ContributionController implements the CRUD actions for Contribution model.
 */
class ContributionController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Contribution models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ContributionSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Contribution model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Updates an existing Contribution model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionContribution($id)
    {

        $paymentType = [
            'CASH' => 'CASH',
            'MOBILE' => 'MOBILE',
            'BANK' => 'BANK',
        ];

        $paymentChannel = [
            'CASH' => 'CASH',
            'AIRTEL' => 'AIRTEL',
            'VODACOM' => 'VODACOM',
        ];

        $model = new Contribution();
        if ($this->request->isPost && $model->load($this->request->post())) {
            $model->user_id = $id;
            $model->created_by = Yii::$app->user->id;
            $model->save();
            return $this->redirect(['user/view', 'id' => $id]);
        }

        return $this->render('create', [
            'model' => $model,
            'paymentType' => $paymentType,
            'paymentChannel' => $paymentChannel
        ]);
    }

    /**
     * Creates a new Contribution model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Contribution();

        $paymentType = [
            'CASH' => 'CASH',
            'MOBILE' => 'MOBILE',
            'BANK' => 'BANK',
        ];

        $paymentChannel = [
            'CASH' => 'CASH',
            'AIRTEL' => 'AIRTEL',
            'VODACOM' => 'VODACOM',
        ];

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $model->created_by = Yii::$app->user->id;
                $model->save(false);
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
            'paymentType' => $paymentType,
            'paymentChannel' => $paymentChannel
        ]);
    }

    /**
     * Updates an existing Contribution model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Contribution model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Contribution model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Contribution the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Contribution::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
