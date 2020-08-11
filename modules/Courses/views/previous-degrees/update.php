<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\Courses\models\PreviousDegrees */

$this->title = 'Update Previous Degrees: ' . $model->degree_id;
$this->params['breadcrumbs'][] = ['label' => 'Previous Degrees', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->degree_id, 'url' => ['view', 'degree_id' => $model->degree_id, 'degree_name' => $model->degree_name]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="previous-degrees-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
