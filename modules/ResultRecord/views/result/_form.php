<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\modules\ResultRecord\models\Result */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="result-form">

    <?php $form = ActiveForm::begin(); ?>

<div class="row">
<div class="col col-sm-6 col-lg-6">
    <?= $form->field($model, 'roll_no')->textInput(['maxlength' => true]) ?>
</div>
<div class="col col-sm-6 col-lg-6">
    <?= $form->field($model, 'registration_no')->textInput(['maxlength' => true]) ?>
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
<div class="col col-sm-4 col-lg-4">
    <?= $form->field($model, 'department')->dropDownList(ArrayHelper::map(app\modules\configuration\models\Department::find()->all(), 'department_id', 'department_name'), ['prompt'=> 'Select department']) ?>
</div>
<div class="col col-sm-4 col-lg-4">
    <?= $form->field($model, 'semester')->dropDownList(ArrayHelper::map(app\modules\Courses\models\Semesters::find()->all(), 'semester_id', 'semester_name'), ['prompt'=> 'Select Semester'])?>
</div>

<div class="col col-sm-4 col-lg-4">
    <?= $form->field($model, 'section')->dropDownList(ArrayHelper::map(app\modules\Courses\models\Section::find()->all(), 'section_id', 'section_name'), ['prompt'=> 'Select Section']) ?>
</div>
</div>

<div class="row">
<div class="col col-sm-4 col-lg-4">
    <?= $form->field($model, 'subject1')->dropDownList(ArrayHelper::map(app\modules\Courses\models\Subjects::find()->all(), 'subject_id', 'subject_name'), ['prompt'=> 'Select Subject']) ?>
</div>

<div class="col col-sm-4 col-lg-4">
    <?= $form->field($model, 'subjec1_obtain_marks')->textInput() ?>
</div>

<div class="col col-sm-4 col-lg-4">
    <?= $form->field($model, 'subject1_total_marks')->textInput() ?>
</div>
</div>

<div class="row">
<div class="col col-sm-4 col-lg-4">
    <?= $form->field($model, 'subject2')->dropDownList(ArrayHelper::map(app\modules\Courses\models\Subjects::find()->all(), 'subject_id', 'subject_name'), ['prompt'=> 'Select Subject']) ?>
</div>
<div class="col col-sm-4 col-lg-4">
    <?= $form->field($model, 'subject2_obtain_marks')->textInput() ?>
</div>

<div class="col col-sm-4 col-lg-4">
    <?= $form->field($model, 'subject2_total_marks')->textInput() ?>
</div>
</div>

<div class="row">
<div class="col col-sm-4 col-lg-4">
    <?= $form->field($model, 'subject3')->dropDownList(ArrayHelper::map(app\modules\Courses\models\Subjects::find()->all(), 'subject_id', 'subject_name'), ['prompt'=> 'Select Subject'])?>
</div>
<div class="col col-sm-4 col-lg-4">
    <?= $form->field($model, 'subject3_obtain_marks')->textInput() ?>
</div>
<div class="col col-sm-4 col-lg-4">
    <?= $form->field($model, 'subject3_total_marks')->textInput() ?>
</div>
</div>


<div class="row">
<div class="col col-sm-4 col-lg-4">
    <?= $form->field($model, 'subject4')->dropDownList(ArrayHelper::map(app\modules\Courses\models\Subjects::find()->all(), 'subject_id', 'subject_name'), ['prompt' => 'Select Subject']) ?>
</div>
<div class="col col-sm-4 col-lg-4">
    <?= $form->field($model, 'subject4_obtain_marks')->textInput() ?>
</div>
<div class="col col-sm-4 col-lg-4">
    <?= $form->field($model, 'subject4_total_marks')->textInput() ?>
</div>
</div>


<div class="row">
<div class="col col-sm-4 col-lg-4">
    <?= $form->field($model, 'subject5')->dropDownList(ArrayHelper::map(app\modules\Courses\models\Subjects::find()->all(), 'subject_id', 'subject_name'), ['prompt' => 'Select Subject']) ?>
</div>
<div class="col col-sm-4 col-lg-4">
    <?= $form->field($model, 'subject5_obtain_marks')->textInput() ?>
</div>
<div class="col col-sm-4 col-lg-4">
    <?= $form->field($model, 'subject5_total_marks')->textInput() ?>
</div>
</div>

<div class="row">
<div class="col col-sm-4 col-lg-4">
    <?= $form->field($model, 'subject6')->dropDownList(ArrayHelper::map(app\modules\Courses\models\Subjects::find()->all(), 'subject_id', 'subject_name'), ['prompt' => 'Select Subject']) ?>
</div>
<div class="col col-sm-4 col-lg-4">
    <?= $form->field($model, 'subject6_obtain_marks')->textInput() ?>
</div>
<div class="col col-sm-4 col-lg-4">
    <?= $form->field($model, 'subject6_total_marks')->textInput() ?>
</div>
</div>

    <div class="form-group col col-sm-3 col-lg-3">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-block']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
