<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\courses\models\Batches */

$this->title = 'Create Batches';
$this->params['breadcrumbs'][] = ['label' => 'Batches', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="batches-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
