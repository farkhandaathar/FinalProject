<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\StudentInformation\models\FirstSemesterSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="first-semester-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'student_id') ?>

    <?= $form->field($model, 'student_roll_no') ?>

    <?= $form->field($model, 'student_registration_no') ?>

    <?= $form->field($model, 'student_name') ?>

    <?= $form->field($model, 'father_name') ?>

    <?php // echo $form->field($model, 'department') ?>

    <?php // echo $form->field($model, 'semester') ?>

    <?php // echo $form->field($model, 'batch') ?>

    <?php // echo $form->field($model, 'section') ?>

    <?php // echo $form->field($model, 'is_status') ?>

    <div class="form-group row">
        <div class="col col-sm-3 col-lg-3">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary btn-block']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary btn-block']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
