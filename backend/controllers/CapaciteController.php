<?php

namespace app\controllers;

use Yii;
use app\models\Capacite;
use app\models\CapaciteSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CapaciteController implements the CRUD actions for Capacite model.
 */
class CapaciteController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Capacite models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CapaciteSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Capacite model.
     * @param integer $idInfirmiere
     * @param integer $idActes
     * @return mixed
     */
    public function actionView($idInfirmiere, $idActes)
    {
        return $this->render('view', [
            'model' => $this->findModel($idInfirmiere, $idActes),
        ]);
    }

    /**
     * Creates a new Capacite model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Capacite();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idInfirmiere' => $model->idInfirmiere, 'idActes' => $model->idActes]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Capacite model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $idInfirmiere
     * @param integer $idActes
     * @return mixed
     */
    public function actionUpdate($idInfirmiere, $idActes)
    {
        $model = $this->findModel($idInfirmiere, $idActes);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idInfirmiere' => $model->idInfirmiere, 'idActes' => $model->idActes]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Capacite model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $idInfirmiere
     * @param integer $idActes
     * @return mixed
     */
    public function actionDelete($idInfirmiere, $idActes)
    {
        $this->findModel($idInfirmiere, $idActes)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Capacite model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $idInfirmiere
     * @param integer $idActes
     * @return Capacite the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idInfirmiere, $idActes)
    {
        if (($model = Capacite::findOne(['idInfirmiere' => $idInfirmiere, 'idActes' => $idActes])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
