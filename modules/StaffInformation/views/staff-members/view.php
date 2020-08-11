<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\StaffInformation\models\StaffMembers */

$this->title = $model->member_id;
$this->params['breadcrumbs'][] = ['label' => 'Staff Members', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="staff-members-view row bg-white " style="padding-top: 30px;">
<div class="col col-lg-2 col-sm-4">
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->member_id], ['class' => 'btn btn-primary btn-block']) ?>
        </div>
        <div class="col col-lg-2 col-sm-4" >
        <?= Html::a('Delete', ['delete', 'id' => $model->member_id], [
            'class' => 'btn btn-danger btn-block',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    </div>
    <table class="table table-sm" style="margin:20px;">

<tr class="bg-success">
    <th><h3 class="text-right">Teacher</h3></th>
    <th><h3 class="text-left">Record </h3></th>
</tr>
<br>
<tr>
    <td style="padding-top: 20px; padding-left: 100px;">
    <h1 ><?= Html::img('@web/images/person.jpg', ['alt'=>'No Image', 'width'=> '200px', 'class'=>'img-circle rounded mx-auto d-block ']) ?></h1>
   
   </td>
   <td style="padding-top:50px; padding-left:100px;">
      
      <h4> <span class="bg-info text-center rounded" style="padding-left:30px; padding-right:30px;">Personal Details<span> <br>
      </h4>
      <p>
      <b><?php echo 'Staff Id: ' ?> </b>
      <?= Html::encode($model->member_id) ?> <br>
      <b><?php echo 'Name: ' ?> </b>
      <?= Html::encode($model->member_first_name.$model->member_last_name) ?> <br>
      <b><?php echo 'Father Name:' ?> </b>
      <?= Html::encode($model->member_first_name.$model->member_last_name) ?> <br>
      <b><?php echo 'CNIC: ' ?> </b>
      <?= Html::encode($model->member_cnic) ?> <br>
      <b><?php echo 'Phone No: ' ?> </b>
      <?= Html::encode($model->member_phone_no_1) ?>  <?php echo "," ?>
      <?= Html::encode($model->member_phone_no_2) ?><br>
      <b><?php echo 'Email: ' ?> </b>
      <?= Html::encode($model->member_email) ?> <br>
    </p>
    </td>
    </tr>

    <tr>
       <td style="padding-top: 20px; padding-left:100px;">
       
       <h4> <span class="bg-info text-center rounded" style="padding-left:30px; padding-right:30px;">Departmental Details<span> <br>
       </h4>
       <p >
       <b><?php echo 'Joining Date:' ?></b>
	   <?= Html::encode($model->member_joining_date) ?><br>
       <b><?php echo 'Department:' ?></b>
	   <?= Html::encode($model->memberDepartment->department_name) ?><br>
       <b><?php echo 'Designation:' ?></b>
	   <?= Html::encode($model->memberDesignation->designation_name) ?><br>
       <b><?php echo 'Category:' ?></b>
	   <?= Html::encode($model->memberCategory->category_name) ?><br>
       <b><?php echo 'Experience:' ?></b>
	   <?= Html::encode($model->member_experience) ?><br>
       </p>
       </td>
       <td style="padding-top: 20px; padding-left:100px;">
       
       <h4> <span class="bg-info text-center rounded" style="padding-left:30px; padding-right:30px;">Address<span> <br>
       </h4>
       <p >
       <b><?php echo 'Address:' ?></b>
	   <?= Html::encode($model->member_address_line_1) ?><br>
       <?= Html::encode($model->member_address_line_2) ?><br>
       <b><?php echo 'Country:' ?></b>
	   <?= Html::encode($model->memberCountry->country_name) ?><br>
       <b><?php echo 'province:' ?></b>
	   <?= Html::encode($model->memberProvince->province_name) ?><br>
       <b><?php echo 'City:' ?></b>
	   <?= Html::encode($model->memberCity->city_name) ?><br>
       <b><?php echo 'ZipCode/Postal:' ?></b>
	   <?= Html::encode($model->member_city_zip_code) ?>
       </p>
       </td>
      
</tr>
<tr>
       <td style="padding-top: 20px; padding-left:100px;">
       
       <h4> <span class="bg-info text-center rounded" style="padding-left:30px; padding-right:30px;">Past Experience<span> <br>
       </h4>
       <p >
       <b><?php echo 'Company Name:' ?></b>
	   <?= Html::encode($model->company_name_1) ?><br>
       <b><?php echo 'Post:' ?></b>
	   <?= Html::encode($model->post_name_1) ?><br>
       <b><?php echo 'Starting Date:' ?></b>
	   <?= Html::encode($model->start_date_1) ?><br>
       <b><?php echo 'Ending Date:' ?></b>
	   <?= Html::encode($model->end_date_1) ?><br>
      

       <b><?php echo 'Company Name:' ?></b>
	   <?= Html::encode($model->compnay_name_2) ?><br>
       <b><?php echo 'Post:' ?></b>
	   <?= Html::encode($model->post_name_2) ?><br>
       <b><?php echo 'Starting Date:' ?></b>
	   <?= Html::encode($model->start_date_2) ?><br>
       <b><?php echo 'Ending Date:' ?></b>
	   <?= Html::encode($model->end_date_2) ?><br>
       
      
       </p>
       </td>
       </td>

</tr>
</div>


