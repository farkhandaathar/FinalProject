<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\Courses\models\SubjectsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subjects-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'subject_id') ?>

    <?= $form->field($model, 'subject_code') ?>

    <?= $form->field($model, 'subject_name') ?>

    <?= $form->field($model, 'created_at') ?>

    <?= $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'is_status') ?>

    <div class="form-group row">

    <div class="col col-sm-3 col-lg-3">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary btn-block']) ?>
    </div>
    <div class="col col-sm-3 col-lg-3">
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
