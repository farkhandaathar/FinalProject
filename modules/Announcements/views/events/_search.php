<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\Announcements\models\EventsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="events-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'event_id') ?>

    <?= $form->field($model, 'event_title') ?>

    <?= $form->field($model, 'event_description') ?>

    <?= $form->field($model, 'event_user_type') ?>

    <?= $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'is_status') ?>

    <div class="form-group col col-lg-4 col-sm-4">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary btn-block']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary btn-block']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
