<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use yii\jui\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\modules\Announcements\models\Notices */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="notices-form">

    <?php $form = ActiveForm::begin(); ?>
<div class="row">
<div class="col col-lg-6 col-sm-6">
    <?= $form->field($model, 'notice_title')->textInput(['maxlength' => true]) ?>
</div>
<div class="col col-lg-6 col-sm-6">
    <?= $form->field($model, 'notice_description')->textInput(['maxlength' => true]) ?>
</div>
</div>

<div class="row">
<div class="col col-lg-6 col-sm-6">
    <?= $form->field($model, 'notice_user_type')->textInput(['maxlength' => true]) ?>
</div>
<div class="col col-lg-6 col-sm-6">
    <?= $form->field($model, 'notice_date')->textInput() ?>
</div>
</div>

<div class="row">
<div class="col col-lg-6 col-sm-6">
    <?= $form->field($model, 'notice_file_path')->textInput(['maxlength' => true]) ?>
</div>
<div class="col col-lg-6 col-sm-6">
    <?= $form->field($model, 'created_at')->textInput() ?>
</div>
</div>

<div class="row">
<div class="col col-lg-6 col-sm-6">
    <?= $form->field($model, 'is_status')->textInput() ?>
</div>
</div>

    <div class="form-group col col-sm-3 col-lg-3">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-block']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
