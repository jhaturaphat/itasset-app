<?php

namespace app\controllers;

use app\models\Asset;
use app\models\AssetSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AssetController implements the CRUD actions for Asset model.
 */
class AssetController extends Controller
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
     * Lists all Asset models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new AssetSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Asset model.
     * @param int $server_id หมายเลขอัตโนมัติ (Primary Key)
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($server_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($server_id),
        ]);
    }

    /**
     * Creates a new Asset model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Asset();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'server_id' => $model->server_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Asset model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $server_id หมายเลขอัตโนมัติ (Primary Key)
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($server_id)
    {
        $model = $this->findModel($server_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'server_id' => $model->server_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Asset model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $server_id หมายเลขอัตโนมัติ (Primary Key)
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($server_id)
    {
        $this->findModel($server_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Asset model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $server_id หมายเลขอัตโนมัติ (Primary Key)
     * @return Asset the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($server_id)
    {
        if (($model = Asset::findOne(['server_id' => $server_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
