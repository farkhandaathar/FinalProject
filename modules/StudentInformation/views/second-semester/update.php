<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\StudentInformation\models\SecondSemester */

$this->title = 'Update Second Semester: ' . $model->student_id;
$this->params['breadcrumbs'][] = ['label' => 'Second Semesters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->student_id, 'url' => ['view', 'student_id' => $model->student_id, 'student_roll_no' => $model->student_roll_no, 'student_registration_no' => $model->student_registration_no]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="second-semester-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
