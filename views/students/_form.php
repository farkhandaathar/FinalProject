<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\StudentInformation\models\Students */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="students-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'student_rollno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'student_registration')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'student_first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'student_middle_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'student_last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'father_first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'father_middle_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'father_last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'student_cnic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'student_gender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'student_dob')->textInput() ?>

    <?= $form->field($model, 'student_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'student_phone_no_1')->textInput() ?>

    <?= $form->field($model, 'student_phone_no_2')->textInput() ?>

    <?= $form->field($model, 'guardian_first name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'guardian_middle_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'guardian_last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'guardian_cnic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'guardian_relation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'guardian_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'guardian_phone_no_1')->textInput() ?>

    <?= $form->field($model, 'guardian_phone_no_2')->textInput() ?>

    <?= $form->field($model, 'student_permanent_address_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'student_permanent_address_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'premanent_city_zip_code')->textInput() ?>

    <?= $form->field($model, 'permanent_country_id')->textInput() ?>

    <?= $form->field($model, 'permanent_province_id')->textInput() ?>

    <?= $form->field($model, 'permanent_city_id')->textInput() ?>

    <?= $form->field($model, 'student_temporary_address_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'student_temporary_address_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'temporary_country_id')->textInput() ?>

    <?= $form->field($model, 'temporary_province_id')->textInput() ?>

    <?= $form->field($model, 'temporary_city_id')->textInput() ?>

    <?= $form->field($model, 'temporary_city_zip_code')->textInput() ?>

    <?= $form->field($model, 'degree')->textInput() ?>

    <?= $form->field($model, 'batch')->textInput() ?>

    <?= $form->field($model, 'section')->textInput() ?>

    <?= $form->field($model, 'degree_start_date')->textInput() ?>

    <?= $form->field($model, 'degree_end_date')->textInput() ?>

    <?= $form->field($model, 'student_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'previous_degree_1')->textInput() ?>

    <?= $form->field($model, 'matric_degree_start_date')->textInput() ?>

    <?= $form->field($model, 'matric_degree_end_date')->textInput() ?>

    <?= $form->field($model, 'matric_marks_obtained')->textInput() ?>

    <?= $form->field($model, 'matric_marks_total')->textInput() ?>

    <?= $form->field($model, 'matric_marks_percentage')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'previous_degree_2')->textInput() ?>

    <?= $form->field($model, 'inter_degree_start_date')->textInput() ?>

    <?= $form->field($model, 'inter_degree_end_date')->textInput() ?>

    <?= $form->field($model, 'inter_marks_obtain')->textInput() ?>

    <?= $form->field($model, 'inter_marks_total')->textInput() ?>

    <?= $form->field($model, 'inter_marks_percentage')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
