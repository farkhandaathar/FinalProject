<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\StudentInformation\models\Students */

$this->title = $model->student_id;
$this->params['breadcrumbs'][] = ['label' => 'Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="students-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'student_id' => $model->student_id, 'student_rollno' => $model->student_rollno, 'student_registration' => $model->student_registration, 'student_cnic' => $model->student_cnic, 'student_email' => $model->student_email, 'student_phone_no_1' => $model->student_phone_no_1, 'student_phone_no_2' => $model->student_phone_no_2, 'guardian_cnic' => $model->guardian_cnic, 'guardian_email' => $model->guardian_email, 'guardian_phone_no_1' => $model->guardian_phone_no_1, 'guardian_phone_no_2' => $model->guardian_phone_no_2], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'student_id' => $model->student_id, 'student_rollno' => $model->student_rollno, 'student_registration' => $model->student_registration, 'student_cnic' => $model->student_cnic, 'student_email' => $model->student_email, 'student_phone_no_1' => $model->student_phone_no_1, 'student_phone_no_2' => $model->student_phone_no_2, 'guardian_cnic' => $model->guardian_cnic, 'guardian_email' => $model->guardian_email, 'guardian_phone_no_1' => $model->guardian_phone_no_1, 'guardian_phone_no_2' => $model->guardian_phone_no_2], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'student_id',
            'student_rollno',
            'student_registration',
            'student_first_name',
            'student_middle_name',
            'student_last_name',
            'father_first_name',
            'father_middle_name',
            'father_last_name',
            'student_cnic',
            'student_gender',
            'student_dob',
            'student_email:email',
            'student_phone_no_1',
            'student_phone_no_2',
            'guardian_first name',
            'guardian_middle_name',
            'guardian_last_name',
            'guardian_cnic',
            'guardian_relation',
            'guardian_email:email',
            'guardian_phone_no_1',
            'guardian_phone_no_2',
            'student_permanent_address_1',
            'student_permanent_address_2',
            'premanent_city_zip_code',
            'permanent_country_id',
            'permanent_province_id',
            'permanent_city_id',
            'student_temporary_address_1',
            'student_temporary_address_2',
            'temporary_country_id',
            'temporary_province_id',
            'temporary_city_id',
            'temporary_city_zip_code',
            'degree',
            'batch',
            'section',
            'degree_start_date',
            'degree_end_date',
            'student_status',
            'previous_degree_1',
            'matric_degree_start_date',
            'matric_degree_end_date',
            'matric_marks_obtained',
            'matric_marks_total',
            'matric_marks_percentage',
            'previous_degree_2',
            'inter_degree_start_date',
            'inter_degree_end_date',
            'inter_marks_obtain',
            'inter_marks_total',
            'inter_marks_percentage',
        ],
    ]) ?>

</div>
