<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\configuration\models\Department */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="department-form" style="margin: 50px;">

    <?php $form = ActiveForm::begin(); ?>
    <div class="from-group">
    <div class="row">
    <div class="col col-sm-6 col-lg-6">
    <?= $form->field($model, 'department_name')->textInput(['maxlength' => true]) ?>
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
    </div>
    <?php ActiveForm::end(); ?>

</div>
