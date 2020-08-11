<?php

namespace app\modules\StudentInformation\controllers;

use Yii;
use app\modules\StudentInformation\models\Students;
use app\modules\StudentInformation\models\StudentsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\modules\configuration\models\Country;
use app\modules\configuration\models\Province;
use app\modules\configuration\models\City;
use app\modules\Courses\models\Section;
use app\modules\Courses\models\Courses;
use app\modules\Courses\models\Batches;
use app\modules\Courses\models\PreviousDegrees;

/**
 * StudentsController implements the CRUD actions for Students model.
 */
class StudentsController extends Controller
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
     * Lists all Students models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new StudentsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Students model.
     * @param integer $student_id
     * @param string $student_rollno
     * @param string $student_registration
     * @param string $student_cnic
     * @param string $student_email
     * @param integer $student_phone_no_1
     * @param integer $student_phone_no_2
     * @param string $guardian_cnic
     * @param string $guardian_email
     * @param integer $guardian_phone_no_1
     * @param integer $guardian_phone_no_2
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($student_id, $student_rollno, $student_registration, $student_cnic, $student_email, $student_phone_no_1, $student_phone_no_2, $guardian_cnic, $guardian_email, $guardian_phone_no_1, $guardian_phone_no_2)
    {
        
        return $this->render('view', [
            'model' => $this->findModel($student_id, $student_rollno, $student_registration, $student_cnic, $student_email, $student_phone_no_1, $student_phone_no_2, $guardian_cnic, $guardian_email, $guardian_phone_no_1, $guardian_phone_no_2),
        ]);
    }

    /**
     * Creates a new Students model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Students();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'student_id' => $model->student_id, 'student_rollno' => $model->student_rollno, 'student_registration' => $model->student_registration, 'student_cnic' => $model->student_cnic, 'student_email' => $model->student_email, 'student_phone_no_1' => $model->student_phone_no_1, 'student_phone_no_2' => $model->student_phone_no_2, 'guardian_cnic' => $model->guardian_cnic, 'guardian_email' => $model->guardian_email, 'guardian_phone_no_1' => $model->guardian_phone_no_1, 'guardian_phone_no_2' => $model->guardian_phone_no_2]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Students model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $student_id
     * @param string $student_rollno
     * @param string $student_registration
     * @param string $student_cnic
     * @param string $student_email
     * @param integer $student_phone_no_1
     * @param integer $student_phone_no_2
     * @param string $guardian_cnic
     * @param string $guardian_email
     * @param integer $guardian_phone_no_1
     * @param integer $guardian_phone_no_2
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($student_id, $student_rollno, $student_registration, $student_cnic, $student_email, $student_phone_no_1, $student_phone_no_2, $guardian_cnic, $guardian_email, $guardian_phone_no_1, $guardian_phone_no_2)
    {
        $model = $this->findModel($student_id, $student_rollno, $student_registration, $student_cnic, $student_email, $student_phone_no_1, $student_phone_no_2, $guardian_cnic, $guardian_email, $guardian_phone_no_1, $guardian_phone_no_2);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'student_id' => $model->student_id, 'student_rollno' => $model->student_rollno, 'student_registration' => $model->student_registration, 'student_cnic' => $model->student_cnic, 'student_email' => $model->student_email, 'student_phone_no_1' => $model->student_phone_no_1, 'student_phone_no_2' => $model->student_phone_no_2, 'guardian_cnic' => $model->guardian_cnic, 'guardian_email' => $model->guardian_email, 'guardian_phone_no_1' => $model->guardian_phone_no_1, 'guardian_phone_no_2' => $model->guardian_phone_no_2]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Students model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $student_id
     * @param string $student_rollno
     * @param string $student_registration
     * @param string $student_cnic
     * @param string $student_email
     * @param integer $student_phone_no_1
     * @param integer $student_phone_no_2
     * @param string $guardian_cnic
     * @param string $guardian_email
     * @param integer $guardian_phone_no_1
     * @param integer $guardian_phone_no_2
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($student_id, $student_rollno, $student_registration, $student_cnic, $student_email, $student_phone_no_1, $student_phone_no_2, $guardian_cnic, $guardian_email, $guardian_phone_no_1, $guardian_phone_no_2)
    {
        $this->findModel($student_id, $student_rollno, $student_registration, $student_cnic, $student_email, $student_phone_no_1, $student_phone_no_2, $guardian_cnic, $guardian_email, $guardian_phone_no_1, $guardian_phone_no_2)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Students model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $student_id
     * @param string $student_rollno
     * @param string $student_registration
     * @param string $student_cnic
     * @param string $student_email
     * @param integer $student_phone_no_1
     * @param integer $student_phone_no_2
     * @param string $guardian_cnic
     * @param string $guardian_email
     * @param integer $guardian_phone_no_1
     * @param integer $guardian_phone_no_2
     * @return Students the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($student_id, $student_rollno, $student_registration, $student_cnic, $student_email, $student_phone_no_1, $student_phone_no_2, $guardian_cnic, $guardian_email, $guardian_phone_no_1, $guardian_phone_no_2)
    {
        if (($model = Students::findOne(['student_id' => $student_id, 'student_rollno' => $student_rollno, 'student_registration' => $student_registration, 'student_cnic' => $student_cnic, 'student_email' => $student_email, 'student_phone_no_1' => $student_phone_no_1, 'student_phone_no_2' => $student_phone_no_2, 'guardian_cnic' => $guardian_cnic, 'guardian_email' => $guardian_email, 'guardian_phone_no_1' => $guardian_phone_no_1, 'guardian_phone_no_2' => $guardian_phone_no_2])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
