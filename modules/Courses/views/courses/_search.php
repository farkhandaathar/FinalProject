<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\courses\models\CoursesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="courses-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'course_id') ?>

    <?= $form->field($model, 'course_name') ?>

    <?= $form->field($model, 'course_code') ?>

    <?= $form->field($model, 'course_alias') ?>

    <?= $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'is_status') ?>

    <div class="form-group col-4 ">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary btn-block']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary btn-block']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
