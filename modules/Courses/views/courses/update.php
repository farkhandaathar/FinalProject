<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\courses\models\Courses */

$this->title = 'Update Courses: ' . $model->course_id;
$this->params['breadcrumbs'][] = ['label' => 'Courses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->course_id, 'url' => ['view', 'course_id' => $model->course_id, 'course_name' => $model->course_name]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="courses-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
