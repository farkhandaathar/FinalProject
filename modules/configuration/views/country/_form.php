<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $model app\modules\configuration\models\Country */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="country-form" style="margin-left: 50px; margin-right:50px;">
    <h1> Create Country</h1>
    <br>
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
    <div class="col col-lg-6 col-sm-6">
    <?= $form->field($model, 'country_name')->textInput(['maxlength' => true]) ?>
   </div>
   <div class="col col-lg-6 col-sm-6">
    <?= $form->field($model, 'created_at')->textInput() ?>
    </div>
    </div>
    <div class="row">
    <div class="col col-lg-6 col-sm-6">
    <?= $form->field($model, 'created_by')->textInput() ?>
    </div>
    <div class="col col-lg-6 col-sm-6">
    <?= $form->field($model, 'updated_at')->textInput() ?>
    </div>
    </div>
    <div class="row">
    <div class="col col-lg-6 col-sm-6">
    <?= $form->field($model, 'updated_by')->textInput() ?>
    </div>
    <div class="col col-lg-6 col-sm-6">
    <?= $form->field($model, 'is_status')->textInput() ?>
    </div>

    </div>
    <div class="form-group  col col-lg-3 col-sm-3">

        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-block']) ?>
    </div>
 

    <?php ActiveForm::end(); ?>

</div>
