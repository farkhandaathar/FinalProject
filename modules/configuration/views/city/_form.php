<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\modules\configuration\models\City */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="city-form form-group col-8 no-padding m-auto">

    <?php $form = ActiveForm::begin(); ?>
<div class="row">
<div class="col col-sm-6 col-lg-6">
    <?= $form->field($model, 'city_name')->textInput(['maxlength' => true]) ?>
</div>
<div class="col col-sm-6 col-lg-6">
    <?= $form->field($model, 'created_by')->textInput() ?>
</div>
</div>
   <br>
    <div class="form-group col col-sm-3 col-lg-3">

        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-block']) ?>
	</div>



    <?php ActiveForm::end(); ?>

</div>
