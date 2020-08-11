<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\StudentInformation\models\Students */

$this->title = 'Create Students';
$this->params['breadcrumbs'][] = ['label' => 'Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="students-create bg-white">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
