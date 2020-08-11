<?php

namespace app\modules\Courses\controllers;

use Yii;
use app\modules\Courses\models\Batches;
use app\modules\Courses\models\BatchesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BatchesController implements the CRUD actions for Batches model.
 */
class BatchesController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Batches models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BatchesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Batches model.
     * @param integer $batch_id
     * @param string $batch_name
     * @param string $batch_alias
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($batch_id, $batch_name, $batch_alias)
    {
        return $this->render('view', [
            'model' => $this->findModel($batch_id, $batch_name, $batch_alias),
        ]);
    }

    /**
     * Creates a new Batches model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Batches();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'batch_id' => $model->batch_id, 'batch_name' => $model->batch_name, 'batch_alias' => $model->batch_alias]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Batches model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $batch_id
     * @param string $batch_name
     * @param string $batch_alias
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($batch_id, $batch_name, $batch_alias)
    {
        $model = $this->findModel($batch_id, $batch_name, $batch_alias);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'batch_id' => $model->batch_id, 'batch_name' => $model->batch_name, 'batch_alias' => $model->batch_alias]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Batches model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $batch_id
     * @param string $batch_name
     * @param string $batch_alias
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($batch_id, $batch_name, $batch_alias)
    {
        $this->findModel($batch_id, $batch_name, $batch_alias)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Batches model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $batch_id
     * @param string $batch_name
     * @param string $batch_alias
     * @return Batches the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($batch_id, $batch_name, $batch_alias)
    {
        if (($model = Batches::findOne(['batch_id' => $batch_id, 'batch_name' => $batch_name, 'batch_alias' => $batch_alias])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
