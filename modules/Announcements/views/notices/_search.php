<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\Announcements\models\NoticesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="notices-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'notice_id') ?>

    <?= $form->field($model, 'notice_title') ?>

    <?= $form->field($model, 'notice_description') ?>

    <?= $form->field($model, 'notice_user_type') ?>

    <?= $form->field($model, 'notice_date') ?>

    <?php // echo $form->field($model, 'notice_file_path') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'is_status') ?>

    <div class="form-group col col-sm-3 col-lg-3">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary btn-block']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary btn-block']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
