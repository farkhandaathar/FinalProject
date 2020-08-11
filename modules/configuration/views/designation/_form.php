<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\configuration\models\Designation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="designation-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="form-group col-8 no-padding m-auto">

    <?= $form->field($model, 'designation_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'is_status')->textInput() ?>
    
    <br>
    <div class="form-group col-4 no-padding">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-block']) ?>
    </div>
    </div>
    

    <?php ActiveForm::end(); ?>

</div>
