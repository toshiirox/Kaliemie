<?php

namespace app\controllers;

use Yii;
use app\models\ActesVisites;
use app\models\ActesVisitesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ActesVisitesController implements the CRUD actions for ActesVisites model.
 */
class ActesVisitesController extends Controller
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
     * Lists all ActesVisites models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ActesVisitesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ActesVisites model.
     * @param integer $idVisite
     * @param integer $idActes
     * @return mixed
     */
    public function actionView($idVisite, $idActes)
    {
        return $this->render('view', [
            'model' => $this->findModel($idVisite, $idActes),
        ]);
    }

    /**
     * Creates a new ActesVisites model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ActesVisites();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idVisite' => $model->idVisite, 'idActes' => $model->idActes]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ActesVisites model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $idVisite
     * @param integer $idActes
     * @return mixed
     */
    public function actionUpdate($idVisite, $idActes)
    {
        $model = $this->findModel($idVisite, $idActes);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idVisite' => $model->idVisite, 'idActes' => $model->idActes]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ActesVisites model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $idVisite
     * @param integer $idActes
     * @return mixed
     */
    public function actionDelete($idVisite, $idActes)
    {
        $this->findModel($idVisite, $idActes)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ActesVisites model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $idVisite
     * @param integer $idActes
     * @return ActesVisites the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idVisite, $idActes)
    {
        if (($model = ActesVisites::findOne(['idVisite' => $idVisite, 'idActes' => $idActes])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
