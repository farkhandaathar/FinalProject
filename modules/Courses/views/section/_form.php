<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\courses\models\Section */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="section-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="form-group col-4 no-padding m-auto">

    <?= $form->field($model, 'section_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'section_course_id')->textInput() ?>

    <?= $form->field($model, 'intake')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'is_status')->textInput() ?>

    <div class="form-group col-4">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-block']) ?>
    </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
