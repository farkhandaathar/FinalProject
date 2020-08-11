<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\StaffInformation\models\StaffMembersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="staff-members-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'member_id') ?>

    <?= $form->field($model, 'member_first_name') ?>

    <?= $form->field($model, 'member_middle_name') ?>

    <?= $form->field($model, 'member_last_name') ?>

    <?= $form->field($model, 'father_first_name') ?>

    <?php // echo $form->field($model, 'father_middle_name') ?>

    <?php // echo $form->field($model, 'father_last_name') ?>

    <?php // echo $form->field($model, 'member_cnic') ?>

    <?php // echo $form->field($model, 'member_gender') ?>

    <?php // echo $form->field($model, 'member_dob') ?>

    <?php // echo $form->field($model, 'member_email') ?>

    <?php // echo $form->field($model, 'member_phone_no_1') ?>

    <?php // echo $form->field($model, 'member_phone_no_2') ?>

    <?php // echo $form->field($model, 'member_address_line_1') ?>

    <?php // echo $form->field($model, 'member_address_line_2') ?>

    <?php // echo $form->field($model, 'member_country_id') ?>

    <?php // echo $form->field($model, 'member_province_id') ?>

    <?php // echo $form->field($model, 'member_city_id') ?>

    <?php // echo $form->field($model, 'member_city_zip_code') ?>

    <?php // echo $form->field($model, 'company_name_1') ?>

    <?php // echo $form->field($model, 'post_name_1') ?>

    <?php // echo $form->field($model, 'start_date_1') ?>

    <?php // echo $form->field($model, 'end_date_1') ?>

    <?php // echo $form->field($model, 'compnay_name_2') ?>

    <?php // echo $form->field($model, 'post_name_2') ?>

    <?php // echo $form->field($model, 'start_date_2') ?>

    <?php // echo $form->field($model, 'end_date_2') ?>

    <?php // echo $form->field($model, 'member_joining_date') ?>

    <?php // echo $form->field($model, 'member_department_id') ?>

    <?php // echo $form->field($model, 'member_designation_id') ?>

    <?php // echo $form->field($model, 'member_category_id') ?>

    <?php // echo $form->field($model, 'member_experience') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
