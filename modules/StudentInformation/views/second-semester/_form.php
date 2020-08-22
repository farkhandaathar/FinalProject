<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\modules\StudentInformation\models\SecondSemester */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="second-semester-form">

    <?php $form = ActiveForm::begin(); ?>
<div class="row">
<div class="col col-sm-6 col-lg-6">
    <?= $form->field($model, 'student_roll_no')->textInput(['maxlength' => true]) ?>
</div>
<div class="col col-sm-6 col-lg-6">
    <?= $form->field($model, 'student_registration_no')->textInput(['maxlength' => true]) ?>
</div>
</div>

<div class="row">
<div class="col col-sm-6 col-lg-6">
    <?= $form->field($model, 'student_name')->textInput(['maxlength' => true]) ?>
</div>
<div class="col col-sm-6 col-lg-6">
    <?= $form->field($model, 'father_name')->textInput(['maxlength' => true]) ?>
</div>
</div>

<div class="row">
<div class="col col-sm-6 col-lg-6">
    <?= $form->field($model, 'department')->dropDownList(ArrayHelper::map(app\modules\configuration\models\Department::find()->all(), 'department_id', 'department_name'), ['prompt'=> 'Select Department']) ?>
</div>

<div class="col col-sm-6 col-lg-6">
    <?= $form->field($model, 'semester')->dropDownList(ArrayHelper::map(app\modules\Courses\models\Semesters::find()->all(), 'semester_id', 'semester_name'), ['prompt'=> 'Select Semester']) ?>
</div>
</div>

<div class="row">
<div class="col col-sm-6 col-lg-6">
    <?= $form->field($model, 'batch')->dropDownList(ArrayHelper::map(app\modules\Courses\models\Batches::find()->all(), 'batch_id', 'batch_name'), ['prompt'=> 'Select Batch']) ?>
</div>
<div class="col col-sm-6 col-lg-6">
    <?= $form->field($model, 'section')->dropDownList(ArrayHelper::map(app\modules\Courses\models\Section::find()->all(), 'section_id', 'section_name'), ['prompt'=> 'Select Section']) ?>
</div>
</div>

<div class="row">
<div class="col col-sm-6 col-lg-6">
    <?= $form->field($model, 'is_status')->textInput() ?>
</div>
</div>


    <div class="form-group col col-sm-3">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-block']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
