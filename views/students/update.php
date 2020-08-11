<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\StudentInformation\models\Students */

$this->title = 'Update Students: ' . $model->student_id;
$this->params['breadcrumbs'][] = ['label' => 'Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->student_id, 'url' => ['view', 'student_id' => $model->student_id, 'student_rollno' => $model->student_rollno, 'student_registration' => $model->student_registration, 'student_cnic' => $model->student_cnic, 'student_email' => $model->student_email, 'student_phone_no_1' => $model->student_phone_no_1, 'student_phone_no_2' => $model->student_phone_no_2, 'guardian_cnic' => $model->guardian_cnic, 'guardian_email' => $model->guardian_email, 'guardian_phone_no_1' => $model->guardian_phone_no_1, 'guardian_phone_no_2' => $model->guardian_phone_no_2]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="students-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
