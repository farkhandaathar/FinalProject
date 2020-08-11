<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use yii\jui\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\modules\Announcements\models\Events */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="events-form">

    <?php $form = ActiveForm::begin(); ?>
<div class="row">
<div class="col col-lg-6 col-sm-6">
    <?= $form->field($model, 'event_title')->textInput(['maxlength' => true]) ?>
</div>
<div class="col col-lg-6 col-sm-6">
    <?= $form->field($model, 'event_description')->textInput(['maxlength' => true]) ?>
</div>
</div>

<div class="row">
<div class="col col-lg-6 col-sm-6">
    <?= $form->field($model, 'event_user_type')->textInput(['maxlength' => true]) ?>
</div>
<div class="col col-lg-6 col-sm-6">
    <b>Created At </b>
    <?= $form->field($model, 'created_at')->widget(yii\jui\DatePicker::className(),
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
                         ],])->label(false) ?>
</div>
</div>

<div class="row">
<div class="col col-lg-6 col-sm-6">
    <?= $form->field($model, 'is_status')->textInput() ?>
</div>
</div>

    <div class="form-group col col-lg-3 col-sm-3">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-block']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
