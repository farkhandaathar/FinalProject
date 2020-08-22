<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
//use kartik\date\DatePicker;

use dosamigos\datepicker\DatePicker;
use yii\helpers\ArrayHelper;

use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\modules\courses\models\Courses */
/* @var $form yii\widgets\ActiveForm */
?>





<div class="courses-form container m-auto col-8">

    <?php $form = ActiveForm::begin(); ?>
    
  <div class= "row">
  <div class="col col-lg-6 col-sm-6">
    <?=$form->field($model, 'course_name')->textInput(['maxlength' => true,]) ?>
  </div>

  <div class="col col-lg-6 col-sm-6">
    <?= $form->field($model, 'course_code')->textInput(['maxlength' => true]) ?>
    </div>
  </div>

<div class="row">
<div class="col col-lg-6 col-lg-6">
    <?= $form->field($model, 'course_alias')->textInput(['maxlength' => true]) ?>
  </div>
  <div class="col col-lg-6 col-sm-6">
    <?= $form->field($model, 'created_by')->textInput() ?>
  </div>
</div>
<div class="row">
<div class="col col-lg-6 col-sm-6">
    <?= $form->field($model, 'created_at')->widget(
    DatePicker::className(), [
        // inline too, not bad
         'inline' => false, 
         // modify template for custom rendering
       //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'dd-M-yyyy'
        ]
]);?>
</div>
<div class="col col-lg-6 col-sm-6"> 
    <?= $form->field($model, 'is_status')->textInput() ?>
</div>
</div>

    <div class="form-group col col-lg-3 col-sm-3">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-block']) ?>
    </div>


    <?php ActiveForm::end(); ?>

</div>
