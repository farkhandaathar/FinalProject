<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\ResultRecord\models\ResultSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="result-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'student_id') ?>

    <?= $form->field($model, 'roll_no') ?>

    <?= $form->field($model, 'registration_no') ?>

    <?= $form->field($model, 'student_name') ?>

    <?= $form->field($model, 'father_name') ?>

    <?php // echo $form->field($model, 'department') ?>

    <?php // echo $form->field($model, 'semester') ?>

    <?php // echo $form->field($model, 'section') ?>

    <?php // echo $form->field($model, 'subject1') ?>

    <?php // echo $form->field($model, 'subjec1_obtain_marks') ?>

    <?php // echo $form->field($model, 'subject1_total_marks') ?>

    <?php // echo $form->field($model, 'subject2') ?>

    <?php // echo $form->field($model, 'subject2_obtain_marks') ?>

    <?php // echo $form->field($model, 'subject2_total_marks') ?>

    <?php // echo $form->field($model, 'subject3') ?>

    <?php // echo $form->field($model, 'subject3_obtain_marks') ?>

    <?php // echo $form->field($model, 'subject3_total_marks') ?>

    <?php // echo $form->field($model, 'subject4') ?>

    <?php // echo $form->field($model, 'subject4_obtain_marks') ?>

    <?php // echo $form->field($model, 'subject4_total_marks') ?>

    <?php // echo $form->field($model, 'subject5') ?>

    <?php // echo $form->field($model, 'subject5_obtain_marks') ?>

    <?php // echo $form->field($model, 'subject5_total_marks') ?>

    <?php // echo $form->field($model, 'subject6') ?>

    <?php // echo $form->field($model, 'subject6_obtain_marks') ?>

    <?php // echo $form->field($model, 'subject6_total_marks') ?>

    <div class="form-group row">
    <div class="col col-sm-3 col-lg-3">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary btn-block']) ?>
    </div>
    <div class="col col-sm-3 col-lg-3">
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary btn-block']) ?>
    </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
