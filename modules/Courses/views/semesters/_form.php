<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\modules\Courses\models\Semesters */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="semesters-form">

    <?php $form = ActiveForm::begin(); ?>
<div class="row">
<div class="col col-sm-6 col-lg-6">
    <?= $form->field($model, 'semester_name')->textInput(['maxlength' => true]) ?>
</div>
<div class="col col-sm-6 col-lg-6">
    <?= $form->field($model, 'created_at')->widget(yii\jui\DatePicker::className(),
                    [
			'model'=>$model,
			'attribute'=>'created_at',
                        'clientOptions' =>[
                        'dateFormat' => 'dd-mm-yyyy',
                        'changeMonth'=> true,
			'yearRange'=>'1900:'.(date('Y')+1),
                        'changeYear'=> true,
			'readOnly'=>true,
                        'autoSize'=>true,
                        'buttonImage'=> Yii::$app->homeUrl."images/calendar.png",],
                        'options'=>[
			'class'=>'form-control',
                         ],])->label(true) ?>
</div>
</div>

<div class="row">
<div class="col col-sm-6 col-lg-6">
    <?= $form->field($model, 'is_status')->textInput() ?>
</div>
</div>

    <div class="form-group col col-sm-3 col-lg-3">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-block']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
