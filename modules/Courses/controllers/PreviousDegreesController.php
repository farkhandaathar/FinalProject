<?php

namespace app\modules\Courses\controllers;

use Yii;
use app\modules\Courses\models\PreviousDegrees;
use app\modules\Courses\models\PreviousDegreesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PreviousDegreesController implements the CRUD actions for PreviousDegrees model.
 */
class PreviousDegreesController extends Controller
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
     * Lists all PreviousDegrees models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PreviousDegreesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PreviousDegrees model.
     * @param integer $degree_id
     * @param string $degree_name
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($degree_id, $degree_name)
    {
        return $this->render('view', [
            'model' => $this->findModel($degree_id, $degree_name),
        ]);
    }

    /**
     * Creates a new PreviousDegrees model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new PreviousDegrees();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'degree_id' => $model->degree_id, 'degree_name' => $model->degree_name]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PreviousDegrees model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $degree_id
     * @param string $degree_name
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($degree_id, $degree_name)
    {
        $model = $this->findModel($degree_id, $degree_name);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'degree_id' => $model->degree_id, 'degree_name' => $model->degree_name]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PreviousDegrees model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $degree_id
     * @param string $degree_name
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($degree_id, $degree_name)
    {
        $this->findModel($degree_id, $degree_name)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PreviousDegrees model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $degree_id
     * @param string $degree_name
     * @return PreviousDegrees the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($degree_id, $degree_name)
    {
        if (($model = PreviousDegrees::findOne(['degree_id' => $degree_id, 'degree_name' => $degree_name])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
