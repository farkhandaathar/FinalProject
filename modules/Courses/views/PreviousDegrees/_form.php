<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\Courses\models\PreviousDegrees */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="previous-degrees-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'degree_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'degree_duration')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
