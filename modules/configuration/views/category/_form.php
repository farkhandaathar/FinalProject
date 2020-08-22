<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\configuration\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-form">

    <?php $form = ActiveForm::begin(); ?>
    <br>
    <br>
    <br>

   <div class="form-group" style="margin-left:50px; margin-right:50px;">
   <div class="row">
   <div class="col col-lg-6 col-sm-6">
       <?= $form->field($model, 'category_name')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col col-lg-6 col-sm-6">
    <?= $form->field($model, 'created_by')->textInput() ?>
    </div>
    </div>

<div class="row">
<div class="col col-lg-6 col-sm-6">
    <?= $form->field($model, 'is_status')->textInput() ?>
</div>
</div>
    <div class="form-group col col-lg-3 col-sm-3">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-block']) ?>
    </div>

    </div>

    <?php ActiveForm::end(); ?>

</div>
