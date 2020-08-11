<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\courses\models\Batches */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="batches-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="form-group col-8 no-padding m-auto">

    <?= $form->field($model, 'batch_name')->textInput(['maxlength' => true]) ?>
   
    <?= $form->field($model, 'batch_alias')->textInput(['maxlength' => true]) ?>
   
    <?= $form->field($model, 'start_date')->textInput() ?>
   
    <?= $form->field($model, 'end_date')->textInput() ?>
   
    <?= $form->field($model, 'created_at')->textInput() ?>
  
    <?= $form->field($model, 'created_by')->textInput() ?>
   
    <?= $form->field($model, 'is_status')->textInput() ?>
  
    <div class="form-group col-4">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-block']) ?>
    </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
