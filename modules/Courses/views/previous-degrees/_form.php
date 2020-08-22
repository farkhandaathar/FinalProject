<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use yii\jui\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\modules\Courses\models\PreviousDegrees */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="previous-degrees-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col col-lg-6 col-sm-6">
        <?= $form->field($model, 'degree_name')->textInput(['maxlength' => true]) ?>
        </div>
    <div class="col col-lg-6 col-sm-6">
    <?= $form->field($model, 'degree_duration')->textInput(['maxlength' => true]) ?>
    </div>
    </div>

<div class="row">
<div class="col col-sm-6 col-lg-6">
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
                         ],])->label(true) ?>
</div>
<div class="col col-sm-6 col-lg-6">
    <?= $form->field($model, 'created_by')->textInput() ?>
</div>
</div>
    <div class="form-group col col-sm-3 col-lg-3">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-block']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
