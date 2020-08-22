<?php

namespace app\modules\StudentInformation\controllers;

use Yii;
use app\modules\StudentInformation\models\SecondSemester;
use app\modules\StudentInformation\models\SecondSemesterSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SecondSemesterController implements the CRUD actions for SecondSemester model.
 */
class SecondSemesterController extends Controller
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
     * Lists all SecondSemester models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SecondSemesterSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SecondSemester model.
     * @param integer $student_id
     * @param string $student_roll_no
     * @param string $student_registration_no
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($student_id, $student_roll_no, $student_registration_no)
    {
        return $this->render('view', [
            'model' => $this->findModel($student_id, $student_roll_no, $student_registration_no),
        ]);
    }

    /**
     * Creates a new SecondSemester model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new SecondSemester();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'student_id' => $model->student_id, 'student_roll_no' => $model->student_roll_no, 'student_registration_no' => $model->student_registration_no]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SecondSemester model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $student_id
     * @param string $student_roll_no
     * @param string $student_registration_no
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($student_id, $student_roll_no, $student_registration_no)
    {
        $model = $this->findModel($student_id, $student_roll_no, $student_registration_no);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'student_id' => $model->student_id, 'student_roll_no' => $model->student_roll_no, 'student_registration_no' => $model->student_registration_no]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SecondSemester model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $student_id
     * @param string $student_roll_no
     * @param string $student_registration_no
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($student_id, $student_roll_no, $student_registration_no)
    {
        $this->findModel($student_id, $student_roll_no, $student_registration_no)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SecondSemester model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $student_id
     * @param string $student_roll_no
     * @param string $student_registration_no
     * @return SecondSemester the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($student_id, $student_roll_no, $student_registration_no)
    {
        if (($model = SecondSemester::findOne(['student_id' => $student_id, 'student_roll_no' => $student_roll_no, 'student_registration_no' => $student_registration_no])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
