<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\configuration\models\City */

//$this->title = 'Create City';
$this->params['breadcrumbs'][] = ['label' => 'Cities', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>

<div class="col-xs-12">
  <div class="col-lg-12 col-sm-12 col-xs-12 no-padding ">
  <h3 class="box-title"> <?php echo 'Add City' ?></h3></div>
</div>
<div class="city-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
