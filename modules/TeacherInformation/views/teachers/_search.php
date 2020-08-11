<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\TeacherInformation\models\TeachersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teachers-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'teacher_id') ?>

    <?= $form->field($model, 'teacher_first_name') ?>

    <?= $form->field($model, 'teacher_middle_name') ?>

    <?= $form->field($model, 'teacher_last_name') ?>

    <?= $form->field($model, 'father_first_name') ?>

    <?php // echo $form->field($model, 'father_middle_name') ?>

    <?php // echo $form->field($model, 'father_last_name') ?>

    <?php // echo $form->field($model, 'teacher_cnic') ?>

    <?php // echo $form->field($model, 'teacher_gender') ?>

    <?php // echo $form->field($model, 'teacher_dob') ?>

    <?php // echo $form->field($model, 'teacher_email') ?>

    <?php // echo $form->field($model, 'teacher_phone_no_1') ?>

    <?php // echo $form->field($model, 'teacher_phone_no_2') ?>

    <?php // echo $form->field($model, 'teacher_address_line_1') ?>

    <?php // echo $form->field($model, 'teacher_address_line_2') ?>

    <?php // echo $form->field($model, 'teacher_country_id') ?>

    <?php // echo $form->field($model, 'teacher_province_id') ?>

    <?php // echo $form->field($model, 'teacher_city_id') ?>

    <?php // echo $form->field($model, 'teacher_city_zip_code') ?>

    <?php // echo $form->field($model, 'company_name_1') ?>

    <?php // echo $form->field($model, 'post_name_1') ?>

    <?php // echo $form->field($model, 'start_date_1') ?>

    <?php // echo $form->field($model, 'end_date_1') ?>

    <?php // echo $form->field($model, 'company_name_2') ?>

    <?php // echo $form->field($model, 'post_name_2') ?>

    <?php // echo $form->field($model, 'start_date_2') ?>

    <?php // echo $form->field($model, 'end_date_2') ?>

    <?php // echo $form->field($model, 'teacher_joining_date') ?>

    <?php // echo $form->field($model, 'teacher_department_id') ?>

    <?php // echo $form->field($model, 'teacher_designation_id') ?>

    <?php // echo $form->field($model, 'teacher_category_id') ?>

    <?php // echo $form->field($model, 'teacher_experience') ?>

    <?php // echo $form->field($model, 'teacher_course_id') ?>

    <?php // echo $form->field($model, 'teacher_batch_id') ?>

    <?php // echo $form->field($model, 'teacher_section_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
