<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\courses\models\Batches */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="batches-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="form-group">
    <div class="row">
    <div class="col col-sm-6 col-lg-6">
    <?= $form->field($model, 'batch_name')->textInput(['maxlength' => true]) ?>
   </div>
   <div class="col col-sm-6 col-lg-6">
    <?= $form->field($model, 'batch_alias')->textInput(['maxlength' => true]) ?>
   </div>
   </div>

   <div class="row">
   <div class="col col-sm-6 col-lg-6">
    <?= $form->field($model, 'start_date')->textInput() ?>
   </div>
   <div class="col col-sm-6 col-lg-6">
    <?= $form->field($model, 'end_date')->textInput() ?>
   </div>
   </div>

   <div class="row">
   <div class="col col-sm-6 col-lg-6">
    <?= $form->field($model, 'created_at')->textInput() ?>
  </div>
  <div class="col col-sm-6 col-lg-6">
    <?= $form->field($model, 'created_by')->textInput() ?>
   </div>
   </div>

<div class="row">
   <div class="col col-sm-6 col-lg-6">
    <?= $form->field($model, 'is_status')->textInput() ?>
</div>
</div>
    <div class="form-group col col-sm-3 col-lg-3">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-block']) ?>
    </div>
  

    <?php ActiveForm::end(); ?>

</div>
