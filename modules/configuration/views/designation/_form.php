<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\configuration\models\Designation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="designation-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="form-group">
    <div class="row">
    <div class="col col-sm-6 col-lg-6">
    <?= $form->field($model, 'designation_name')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col col-sm-6 col-lg-6">
    <?= $form->field($model, 'created_by')->textInput() ?>
</div>
</div>
<div class="row">
<div class="col col-lg-6 col-sm-6">
    <?= $form->field($model, 'is_status')->textInput() ?>
</div>
</div>

    <br>
    <div class="form-group col col-sm-3 col-lg-3">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-block']) ?>
    </div>
    </div>
    

    <?php ActiveForm::end(); ?>

</div>
