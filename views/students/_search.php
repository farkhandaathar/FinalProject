<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\StudentInformation\models\StudentsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="students-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'student_id') ?>

    <?= $form->field($model, 'student_rollno') ?>

    <?= $form->field($model, 'student_registration') ?>

    <?= $form->field($model, 'student_first_name') ?>

    <?= $form->field($model, 'student_middle_name') ?>

    <?php // echo $form->field($model, 'student_last_name') ?>

    <?php // echo $form->field($model, 'father_first_name') ?>

    <?php // echo $form->field($model, 'father_middle_name') ?>

    <?php // echo $form->field($model, 'father_last_name') ?>

    <?php // echo $form->field($model, 'student_cnic') ?>

    <?php // echo $form->field($model, 'student_gender') ?>

    <?php // echo $form->field($model, 'student_dob') ?>

    <?php // echo $form->field($model, 'student_email') ?>

    <?php // echo $form->field($model, 'student_phone_no_1') ?>

    <?php // echo $form->field($model, 'student_phone_no_2') ?>

    <?php // echo $form->field($model, 'guardian_first name') ?>

    <?php // echo $form->field($model, 'guardian_middle_name') ?>

    <?php // echo $form->field($model, 'guardian_last_name') ?>

    <?php // echo $form->field($model, 'guardian_cnic') ?>

    <?php // echo $form->field($model, 'guardian_relation') ?>

    <?php // echo $form->field($model, 'guardian_email') ?>

    <?php // echo $form->field($model, 'guardian_phone_no_1') ?>

    <?php // echo $form->field($model, 'guardian_phone_no_2') ?>

    <?php // echo $form->field($model, 'student_permanent_address_1') ?>

    <?php // echo $form->field($model, 'student_permanent_address_2') ?>

    <?php // echo $form->field($model, 'premanent_city_zip_code') ?>

    <?php // echo $form->field($model, 'permanent_country_id') ?>

    <?php // echo $form->field($model, 'permanent_province_id') ?>

    <?php // echo $form->field($model, 'permanent_city_id') ?>

    <?php // echo $form->field($model, 'student_temporary_address_1') ?>

    <?php // echo $form->field($model, 'student_temporary_address_2') ?>

    <?php // echo $form->field($model, 'temporary_country_id') ?>

    <?php // echo $form->field($model, 'temporary_province_id') ?>

    <?php // echo $form->field($model, 'temporary_city_id') ?>

    <?php // echo $form->field($model, 'temporary_city_zip_code') ?>

    <?php // echo $form->field($model, 'degree') ?>

    <?php // echo $form->field($model, 'batch') ?>

    <?php // echo $form->field($model, 'section') ?>

    <?php // echo $form->field($model, 'degree_start_date') ?>

    <?php // echo $form->field($model, 'degree_end_date') ?>

    <?php // echo $form->field($model, 'student_status') ?>

    <?php // echo $form->field($model, 'previous_degree_1') ?>

    <?php // echo $form->field($model, 'matric_degree_start_date') ?>

    <?php // echo $form->field($model, 'matric_degree_end_date') ?>

    <?php // echo $form->field($model, 'matric_marks_obtained') ?>

    <?php // echo $form->field($model, 'matric_marks_total') ?>

    <?php // echo $form->field($model, 'matric_marks_percentage') ?>

    <?php // echo $form->field($model, 'previous_degree_2') ?>

    <?php // echo $form->field($model, 'inter_degree_start_date') ?>

    <?php // echo $form->field($model, 'inter_degree_end_date') ?>

    <?php // echo $form->field($model, 'inter_marks_obtain') ?>

    <?php // echo $form->field($model, 'inter_marks_total') ?>

    <?php // echo $form->field($model, 'inter_marks_percentage') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
