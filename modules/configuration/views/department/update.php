<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\configuration\models\Department */

$this->title = 'Update Department: ' . $model->department_id;
$this->params['breadcrumbs'][] = ['label' => 'Departments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->department_id, 'url' => ['view', 'id' => $model->department_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="department-update">

   

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
