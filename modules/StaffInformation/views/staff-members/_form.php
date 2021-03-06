<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\URL;
use yii\helpers\ArrayHelper;
use yii\jui\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\modules\StaffInformation\models\StaffMembers */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="bg-white" style="padding-top:30px;">
<div class="staff-members-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="bg-success rounded" style="padding: 5px; padding-left: 20px;">
    <h4> <?php echo "Personal Details" ?> </h4>
    </div>

    <div class="row" style="margin-top: 20px";>
    <div class="col col-lg-4 col-sm-6">
    <?= $form->field($model, 'member_first_name')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col col-lg-4 col-sm-6">
    <?= $form->field($model, 'member_middle_name')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-lg-4 col-sm-6">
    <?= $form->field($model, 'member_last_name')->textInput(['maxlength' => true]) ?>
    </div>
    </div>
    <div class="row">
    <div class="col col-lg-4 col-sm-6">
    <?= $form->field($model, 'father_first_name')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col col-lg-4 col-sm-6">
    <?= $form->field($model, 'father_middle_name')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col col-lg-4 col-sm-6">
    <?= $form->field($model, 'father_last_name')->textInput(['maxlength' => true]) ?>
    </div>
    </div>

    <div class="row">
    <div class="col col-lg-4 col-sm-6">
    <?= $form->field($model, 'member_cnic')->textInput() ?>
    </div>
    <div class="col col-lg-4 col-sm-6">
    <?= $form->field($model, 'member_gender')->dropDownList(
            ['Male' => 'Male', 'Female' => 'Female', 'Other' => 'Other'],['prompt'=> 'Select Gender']
    ); ?>
    </div>
    <div class="col col-lg-4 col-sm-6">
    <?= $form->field($model, 'member_dob')->widget(yii\jui\DatePicker::className(),
                    [
			'model'=>$model,
			'attribute'=>'member_dob',
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
    <?= $form->field($model, 'member_email')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col col-lg-4 col-sm-6">
    <?= $form->field($model, 'member_phone_no_1')->textInput() ?>
    </div>
    <div class="col col-lg-4 col-sm-6">
    <?= $form->field($model, 'member_phone_no_2')->textInput() ?>
    </div>
    </div>

    <div class="bg-success rounded" style="padding: 5px; padding-left: 20px;">
    <h4> <?php echo "Residiantial Details" ?> </h4>
    </div>
    <br>
    
    <div class="row" style="margin-top: 20px;">
    <div class="col col-lg-8 col-sm-8">
    <?= $form->field($model, 'member_address_line_1')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col col-lg-8 col-sm-8">
    <?= $form->field($model, 'member_address_line_2')->textInput(['maxlength' => true]) ?>
    </div>
    </div>

    <div class="row">
    <div class="col col-lg-6 col-sm-8">
    <?= $form->field($model, 'member_country_id')->dropDownList(ArrayHelper::map(app\modules\configuration\models\Country::find()->all(), 'country_id', 'country_name'), ['prompt'=> 'Select Country']) ?>
    </div>
    <div class="col col-lg-6 col-sm-8">
    <?= $form->field($model, 'member_province_id')->dropDownList(ArrayHelper::map(app\modules\configuration\models\Province::find()->all(), 'province_id', 'province_name'), ['prompt'=> 'Select Province']) ?>
    </div>
    </div>

    <div class="row">
    <div class="col col-lg-6 col-sm-6">
    <?= $form->field($model, 'member_city_id')->dropDownList(ArrayHelper::map(app\modules\configuration\models\City::find()->all(), 'city_id', 'city_name'), ['prompt'=> 'Select City']) ?>
    </div>
    <div class="col col-lg-6 col-sm-6">
    <?= $form->field($model, 'member_city_zip_code')->textInput() ?>
    </div>
    </div>

    <div class="bg-success rounded" style="padding: 5px; padding-left: 20px;">
    <h4> <?php echo "Experience" ?> </h4>
    </div>
    <br>

    <div class="row" style="margin-top:20px;">
    <div class="col col-lg-6 col-sm-6">
    <?= $form->field($model, 'company_name_1')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col col-lg-6 col-sm-6">
    <?= $form->field($model, 'post_name_1')->textInput(['maxlength' => true]) ?>
    </div>
    </div>

    <div class="row">
    <div class="col col-lg-6 col-sm-6">
    <?= $form->field($model, 'start_date_1')->widget(yii\jui\DatePicker::className(),
                    [
			'model'=>$model,
			'attribute'=>'start_date_1',
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
    <div class="col col-lg-6 col-sm-6">
    <?= $form->field($model, 'end_date_1')->widget(yii\jui\DatePicker::className(),
                    [
			'model'=>$model,
			'attribute'=>'end_date_1',
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
    <div class="col col-lg-6 col-sm-6">
    <?= $form->field($model, 'compnay_name_2')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col col-lg-6 col-sm-6">
    <?= $form->field($model, 'post_name_2')->textInput(['maxlength' => true]) ?>
    </div>
    </div>

    <div class="row">
    <div class="col col-lg-6 col-sm-6">
    <?= $form->field($model, 'start_date_2')->widget(yii\jui\DatePicker::className(),
                    [
			'model'=>$model,
			'attribute'=>'start_date_2',
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
    <div class="col col-lg-6 col-sm-6">
    <?= $form->field($model, 'end_date_2')->widget(yii\jui\DatePicker::className(),
                    [
			'model'=>$model,
			'attribute'=>'end_date_2',
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

    <div class="bg-success rounded col col-12" style="padding: 5px; padding-left: 20px;">
    <h4> <?php echo "Departmental Details" ?> </h4>
    </div>

    <div class="row" style="margin-top: 20px;">
    <div class="col col-lg-4 col-sm-6">
    <?= $form->field($model, 'member_joining_date')->widget(yii\jui\DatePicker::className(),
                    [
			'model'=>$model,
			'attribute'=>'member_joining_date',
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
    <?= $form->field($model, 'member_department_id')->dropDownList(ArrayHelper::map(app\modules\configuration\models\Department::find()->all(), 'department_id', 'department_name'), ['prompt'=> 'Select Department']) ?>
    </div>
    <div class="col col-lg-4 col-sm-6">
    <?= $form->field($model, 'member_designation_id')->dropDownList(ArrayHelper::map(app\modules\configuration\models\Designation::find()->all(), 'designation_id', 'designation_name'), ['prompt'=> 'Select Designation']) ?>
    </div>
    </div>
    <div class="row">
    <div class="col col-lg-6 col-sm-6">
    <?= $form->field($model, 'member_category_id')->dropDownList(ArrayHelper::map(app\modules\configuration\models\Category::find()->all(), 'category_id', 'category_name'), ['prompt'=> 'Select Category']) ?>
    </div>
    <div class="col col-lg-6 col-sm-6">
    <?= $form->field($model, 'member_experience')->textInput(['maxlength' => true]) ?>
    </div>
    </div>
    <div class="form-group col col-lg-3">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-block']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>