<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\configuration\DesignationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="designation-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'designation_id') ?>

    <?= $form->field($model, 'designation_name') ?>

    <?= $form->field($model, 'created_by') ?>

    <?= $form->field($model, 'is_status') ?>

    <div class="form-group col-4 no-padding ">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary btn-block']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary btn-block']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
