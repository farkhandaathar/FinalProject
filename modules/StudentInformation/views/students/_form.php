<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use yii\jui\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\modules\StudentInformation\models\Students */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="container bg-white" style=" padding:30px;">
<div class="students-form ">

    <?php $form = ActiveForm::begin(); ?>

    <div class="bg-success rounded" style="padding: 5px; padding-left: 20px;">
    <h4> <?php echo "Personal Details" ?> </h4>
    </div>
    
<div class="row" style="margin-top: 20px;">
    <div class="col col-lg-4 col-sm-8">
    <?= $form->field($model, 'student_rollno')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col col-lg-4 col-sm-8" >
    <?= $form->field($model, 'student_registration')->textInput(['maxlength' => true]) ?>
    </div>
</div>

<div class="row">
    <div class="col col-lg-4 col-sm-8">
    <?= $form->field($model, 'student_first_name')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col col-lg-4 col-sm-8">
    <?= $form->field($model, 'student_middle_name')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col col-lg-4 col-sm-8">
    <?= $form->field($model, 'student_last_name')->textInput(['maxlength' => true]) ?>
    </div>
</div>

<div class="row">
<div class="col col-lg-4 col-sm-8">
    <?= $form->field($model, 'father_first_name')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col col-lg-4 col-sm-8">
    
    <?= $form->field($model, 'father_middle_name')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col col-lg-4 col-sm-8">
    <?= $form->field($model, 'father_last_name')->textInput(['maxlength' => true]) ?>
    </div>
    </div>

    <div class="row">
    <div class="col col-lg-6 col-sm-8">
     <?= $form->field($model, 'student_cnic')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col col-lg-6 col-sm-8">
    <?= $form->field($model, 'student_gender')->dropDownList(
            ['Male' => 'Male', 'Female' => 'Female', 'Other' => 'Other'],['prompt'=> 'Select Gender']
    ); ?>
    </div>
    </div>

<div class="row">
    <div class="col col-lg-6 col-sm-8">
        <?= $form->field($model, 'student_dob')->widget(yii\jui\DatePicker::className(),
                    [
			'model'=>$model,
			'attribute'=>'student_dob',
                        'clientOptions' =>[
                        'dateFormat' => 'dd-mm-yyyy',
                        'changeMonth'=> true,
			'yearRange'=>'1900:'.(date('Y')+1),
                        'changeYear'=> true,
			'readOnly'=>true,
                        'autoSize'=>true,
                        'buttonImage'=> Yii::$app->homeUrl."images/calendar.png",],
                        'options'=>[
			'class'=>'form-control',
                         ],])->label(true) ?>
    </div>
    <div class="col col-lg-6 col-sm-8">
         <?= $form->field($model, 'student_email')->textInput(['maxlength' => true]) ?>
    </div>
</div>
<div class="row">
    <div class="col col-lg-6 col-sm-8">
    <?= $form->field($model, 'student_phone_no_1')->textInput() ?>
    </div>
    <div class="col col-lg-6 col-sm-8">
    <?= $form->field($model, 'student_phone_no_2')->textInput() ?>
    </div>
</div>

<div class="bg-success rounded" style="padding: 5px; padding-left: 20px;">
    <h4> <?php echo "Guardian Details" ?> </h4>
    </div>

    <div class="row" style="margin-top: 20px;">
    <div class="col col-lg-4 col-sm-8">
    <?= $form->field($model, 'guardian_first_name')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col col-lg-4 col-sm-8">
    <?= $form->field($model, 'guardian_middle_name')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col col-lg-4 col-sm-8">
    <?= $form->field($model, 'guardian_last_name')->textInput(['maxlength' => true]) ?>
    </div>
    </div>
    
    <div class="row">
    <div class="col col-lg-4 col-sm-8">
    <?= $form->field($model, 'guardian_cnic')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col col-lg-4 col-sm-8">
    <?= $form->field($model, 'guardian_relation')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="col col-lg-4 col-sm-8">
    <?= $form->field($model, 'guardian_email')->textInput(['maxlength' => true]) ?>
    </div>
    </div>

    <div class="row">
    <div class="col col-lg-6 col-sm-8">
        <?= $form->field($model, 'guardian_phone_no_1')->textInput() ?>
    </div>
    <div class="col col-lg-6 col-sm-8">
    <?= $form->field($model, 'guardian_phone_no_2')->textInput() ?>
    </div>
    </div>

    <div class="bg-success rounded" style="padding: 5px; padding-left: 20px;">
    <h4> <?php echo "Residiantial Details" ?> </h4>
    </div>
    <br>
    
    <div class="bg-info rounded" style=" padding-left: 20px;">
    <h3> <?php echo "Permanent address" ?> </h3>
    </div>

<div class="row" style="margin-top: 20px;">
    <div class="col col-8 ">
    <?= $form->field($model, 'student_permanent_address_1')->textInput(['maxlength' => true]) ?>
    </div>
</div>
<div class="row">
<div class="col col-8">
    <?= $form->field($model, 'student_permanent_address_2')->textInput(['maxlength' => true]) ?>
</div>
<div class="col col-lg-4 col-sm-8">
    <?= $form->field($model, 'premanent_city_zip_code')->textInput() ?>
</div>
</div>
<div class="row">
<div class="col col-lg-4 col-sm-8">
    <?= $form->field($model, 'permanent_country_id')->dropDownList(ArrayHelper::map(app\modules\configuration\models\Country::find()->all(), 'country_id', 'country_name'), ['prompt'=> 'Select Country']) ?>
</div>
<div class="col col-lg-4 col-sm-8">
    <?= $form->field($model, 'permanent_province_id')->dropDownList(ArrayHelper::map(app\modules\configuration\models\Province::find()->all(), 'province_id', 'province_name'), ['prompt'=> 'Select Province']) ?>
</div>
<div class="col col-lg-4 col-sm-8">
    <?= $form->field($model, 'permanent_city_id')->dropDownList(ArrayHelper::map(app\modules\configuration\models\City::find()->all(), 'city_id', 'city_name'), ['prompt'=> 'Select City']) ?>
</div>
</div>

<div class="bg-info rounded" style=" padding-left: 20px; margin-top:10px;">
    <h3> <?php echo "Temporary address" ?> </h3>
    </div>

<div class="row" style="margin-top: 20px;">
    <div class="col col-8">
    <?= $form->field($model, 'student_temporary_address_1')->textInput(['maxlength' => true]) ?>
</div>
</div>

<div class="row">
<div class="col col-lg-8 col-sm-8">
    <?= $form->field($model, 'student_temporary_address_2')->textInput(['maxlength' => true]) ?>
</div>
<div class="col col-lg-4 col-sm-6">
    <?= $form->field($model, 'temporary_country_id')->dropDownList(ArrayHelper::map(app\modules\configuration\models\Country::find()->all(), 'country_id', 'country_name'), ['prompt'=> 'Select Country']) ?>
</div>
</div>

<div class="row">
<div class="col col-lg-4 col-sm-6">
    <?= $form->field($model, 'temporary_province_id')->dropDownList(ArrayHelper::map(app\modules\configuration\models\Province::find()->all(), 'province_id', 'province_name'), ['prompt'=> 'Select Province']) ?>
</div>
<div class="col col-lg-4 col-sm-6">
    <?= $form->field($model, 'temporary_city_id')->dropDownList(ArrayHelper::map(app\modules\configuration\models\City::find()->all(), 'city_id', 'city_name'), ['prompt'=> 'Select City']) ?>
</div>
<div class="col col-lg-4 col-sm-6">
    <?= $form->field($model, 'temporary_city_zip_code')->textInput() ?>
</div>
</div>
<div class="bg-success rounded col col-12" style="padding: 5px; padding-left: 20px;">
    <h4> <?php echo "Academic Details" ?> </h4>
</div>
    
<div class="row" style="margin-top: 20px;">
<div class="col col-lg-4 col-sm-6">
    <?= $form->field($model, 'degree')->dropDownList(ArrayHelper::map(app\modules\Courses\models\Courses::find()->all(), 'course_id', 'course_name'), ['prompt'=> 'Select Course']) ?>
</div>
<div class="col col-lg-4 col-sm-6">
    <?= $form->field($model, 'batch')->dropDownList(ArrayHelper::map(app\modules\Courses\models\Batches::find()->all(), 'batch_id', 'batch_name'), ['prompt'=> 'Select Batch']) ?>
</div>
<div class="col col-lg-4 col-sm-6">
    <?= $form->field($model, 'section')->dropDownList(ArrayHelper::map(app\modules\Courses\models\Section::find()->all(), 'section_id', 'section_name'), ['prompt'=> 'Select Section']) ?>
</div>
</div>
<div class="row">
<div class="col col-lg-4 col-sm-6">
    <?= $form->field($model, 'degree_start_date')->widget(yii\jui\DatePicker::className(),
                    [
			'model'=>$model,
			'attribute'=>'degree_start_date',
                        'clientOptions' =>[
                        'dateFormat' => 'dd-mm-yyyy',
                        'changeMonth'=> true,
			'yearRange'=>'1900:'.(date('Y')+1),
                        'changeYear'=> true,
			'readOnly'=>true,
                        'autoSize'=>true,
                        'buttonImage'=> Yii::$app->homeUrl."images/calendar.png",],
                        'options'=>[
			'class'=>'form-control',
                         ],])->label(true) ?>
</div>
<div class="col col-lg-4 col-sm-6">
    <?= $form->field($model, 'degree_end_date')->widget(yii\jui\DatePicker::className(),
                    [
			'model'=>$model,
			'attribute'=>'degree_end_date',
                        'clientOptions' =>[
                        'dateFormat' => 'dd-mm-yyyy',
                        'changeMonth'=> true,
			'yearRange'=>'1900:'.(date('Y')+1),
                        'changeYear'=> true,
			'readOnly'=>true,
                        'autoSize'=>true,
                        'buttonImage'=> Yii::$app->homeUrl."images/calendar.png",],
                        'options'=>[
			'class'=>'form-control',
                         ],])->label(true) ?>
</div>

<div class="col col-lg-4 col-sm-6">
    <?= $form->field($model, 'student_status')->dropDownList(
            ['Rejoin' => 'Rejoin', 'Passout' => 'Passout', 'Detain' => 'Detain'],['prompt'=> 'Select Student Status']
    ); ?>
</div>
</div>

<div class="bg-success rounded col col-12" style="padding: 5px; padding-left: 20px;">
    <h4> <?php echo "Previous Degrees" ?> </h4>
</div>
<br>
<div class="bg-info rounded col col-12" style="padding-left: 20px;">
    <h3> <?php echo "Matric" ?> </h3>
</div>

<div class="row" style="margin-top:20px">
<div class="col col-lg-4 col-sm-6">
 <?= $form->field($model, 'previous_degree_1')->dropDownList(ArrayHelper::map(app\modules\Courses\models\PreviousDegrees::find()->all(), 'degree_id', 'degree_name'), ['prompt'=> 'Select Degree']) ?>
</div>
<div class="col col-lg-4 col-sm-6">
    <?= $form->field($model, 'matric_degree_start_date')->widget(yii\jui\DatePicker::className(),
                    [
			'model'=>$model,
			'attribute'=>'matric_degree_start_date',
                        'clientOptions' =>[
                        'dateFormat' => 'dd-mm-yyyy',
                        'changeMonth'=> true,
			'yearRange'=>'1900:'.(date('Y')+1),
                        'changeYear'=> true,
			'readOnly'=>true,
                        'autoSize'=>true,
                        'buttonImage'=> Yii::$app->homeUrl."images/calendar.png",],
                        'options'=>[
			'class'=>'form-control',
                         ],])->label(true) ?>
</div>
<div class="col col-lg-4 col-sm-6">
    <?= $form->field($model, 'matric_degree_end_date')->widget(yii\jui\DatePicker::className(),
                    [
			'model'=>$model,
			'attribute'=>'matric_degree_end_date',
                        'clientOptions' =>[
                        'dateFormat' => 'dd-mm-yyyy',
                        'changeMonth'=> true,
			'yearRange'=>'1900:'.(date('Y')+1),
                        'changeYear'=> true,
			'readOnly'=>true,
                        'autoSize'=>true,
                        'buttonImage'=> Yii::$app->homeUrl."images/calendar.png",],
                        'options'=>[
			'class'=>'form-control',
                         ],])->label(true) ?>
</div>
</div>
<div class="row">
<div class="col col-lg-4 col-sm-6">
    <?= $form->field($model, 'matric_marks_obtained')->textInput() ?>
</div>
<div class="col col-lg-4 col-sm-6">
    <?= $form->field($model, 'matric_marks_total')->textInput() ?>
</div>
<div class="col col-lg-4 col-sm-6">
    <?= $form->field($model, 'matric_marks_percentage')->textInput(['maxlength' => true]) ?>
</div>
</div>
<div class="bg-info rounded col col-12" style="padding-left: 20px; margin-top:10px;">
    <h3> <?php echo "Intermediate" ?> </h3>
</div>

<div class="row" style="margin-top:20px">
<div class="col col-lg-4 col-sm-6">
    <?= $form->field($model, 'previous_degree_2')->dropDownList(ArrayHelper::map(app\modules\Courses\models\PreviousDegrees::find()->all(), 'degree_id', 'degree_name'), ['prompt'=> 'Select Degree']) ?>
</div>
<div class="col col-lg-4 col-sm-6">
    <?= $form->field($model, 'inter_degree_start_date')->widget(yii\jui\DatePicker::className(),
                    [
			'model'=>$model,
			'attribute'=>'inter_degree_start_date',
                        'clientOptions' =>[
                        'dateFormat' => 'dd-mm-yyyy',
                        'changeMonth'=> true,
			'yearRange'=>'1900:'.(date('Y')+1),
                        'changeYear'=> true,
			'readOnly'=>true,
                        'autoSize'=>true,
                        'buttonImage'=> Yii::$app->homeUrl."images/calendar.png",],
                        'options'=>[
			'class'=>'form-control',
                         ],])->label(true) ?>
</div>
<div class="col col-lg-4 col-sm-6">
    <?= $form->field($model, 'inter_degree_end_date')->widget(yii\jui\DatePicker::className(),
                    [
			'model'=>$model,
			'attribute'=>'inter_degree_end_date',
                        'clientOptions' =>[
                        'dateFormat' => 'dd-mm-yyyy',
                        'changeMonth'=> true,
			'yearRange'=>'1900:'.(date('Y')+1),
                        'changeYear'=> true,
			'readOnly'=>true,
                        'autoSize'=>true,
                        'buttonImage'=> Yii::$app->homeUrl."images/calendar.png",],
                        'options'=>[
			'class'=>'form-control',
                         ],])->label(true) ?>
</div>
</div>
<div class="row">
<div class="col col-lg-4 col-sm-6">
    <?= $form->field($model, 'inter_marks_obtain')->textInput() ?>
</div>
<div class="col col-lg-4 col-sm-6">
    <?= $form->field($model, 'inter_marks_total')->textInput() ?>
</div>
<div class="col col-lg-4 col-sm-6">
    <?= $form->field($model, 'inter_marks_percentage')->textInput(['maxlength' => true]) ?>
</div>
</div>
    <div class="form-group col col-lg-4 col-sm-6">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-block']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</div>

