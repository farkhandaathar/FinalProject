<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\configuration\models\Province */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="province-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="form-group" style="margin-left:50px; margin-right:50px;">
    <div class="row">
    <div class="col col-sm-6 col-lg-6">
    <?= $form->field($model, 'province_name')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col col-sm-6 col-lg-6">
    <?= $form->field($model, 'created_by')->textInput() ?>
    </div>
    </div>
    <div class="form-group col col-sm-3 col-lg-3" >
        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-block']) ?>
    </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
