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

    <?= $form->field($model, 'city_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

   <br>
    <div class="form-group col-xs-12 col-sm-6 col-lg-4 no-padding edusecArLangCss">
	<div class="col-xs-4">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-block']) ?>
	</div>
     </div>


    <?php ActiveForm::end(); ?>

</div>
