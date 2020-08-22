<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\StudentInformation\models\FirstSemester */

$this->title = 'Update First Semester: ' . $model->student_id;
$this->params['breadcrumbs'][] = ['label' => 'First Semesters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->student_id, 'url' => ['view', 'id' => $model->student_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="first-semester-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
