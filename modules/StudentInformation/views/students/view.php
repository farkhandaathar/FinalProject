<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

use yii\grid\GridView;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\modules\StudentInformation\models\Students */

$this->title = $model->student_id;
$this->params['breadcrumbs'][] = ['label' => 'Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>


<div class="students-view row bg-white " style="padding-top: 30px;">

<div class="col col-lg-2 col-sm-4">
    <p>
        <?= Html::a('Update', ['update', 'student_id' => $model->student_id, 'student_rollno' => $model->student_rollno, 'student_registration' => $model->student_registration, 'student_cnic' => $model->student_cnic, 'student_email' => $model->student_email, 'student_phone_no_1' => $model->student_phone_no_1, 'student_phone_no_2' => $model->student_phone_no_2, 'guardian_cnic' => $model->guardian_cnic, 'guardian_email' => $model->guardian_email, 'guardian_phone_no_1' => $model->guardian_phone_no_1, 'guardian_phone_no_2' => $model->guardian_phone_no_2], ['class' => 'btn btn-primary btn-block']) ?>
       </div>
       <div class="col col-lg-2 col-sm-4">
        <?= Html::a('Delete', ['delete', 'student_id' => $model->student_id, 'student_rollno' => $model->student_rollno, 'student_registration' => $model->student_registration, 'student_cnic' => $model->student_cnic, 'student_email' => $model->student_email, 'student_phone_no_1' => $model->student_phone_no_1, 'student_phone_no_2' => $model->student_phone_no_2, 'guardian_cnic' => $model->guardian_cnic, 'guardian_email' => $model->guardian_email, 'guardian_phone_no_1' => $model->guardian_phone_no_1, 'guardian_phone_no_2' => $model->guardian_phone_no_2], [
            'class' => 'btn btn-danger btn-block',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
</div>
<table class=" table table-sm " style="margin:20px;">
    <!--First Row-->
    <tr class="bg-success"> 
     <th colspan="3"><h3 class="text-center"> Student Record </h3></th> 
    </tr>
    
    <tr >
       <td style="padding-top: 20px; padding-left: 100px;">
       <h1 ><?= Html::img('@web/images/person.jpg', ['alt'=>'No Image', 'width'=> '200px', 'class'=>'img-circle rounded mx-auto d-block ']) ?></h1>
   
    </td>
    <td style="padding-top:50px; padding-left:100px;">
       
       <h4> <span class="bg-info text-center rounded" style="padding-left:30px; padding-right:30px;">Personal Details<span> <br>
       </h4>
       <p >
       <b><?php echo 'Roll No:' ?></b>
	   <?= Html::encode($model->student_rollno) ?><br>
       <b><?php echo 'Resgistration No:' ?></b>
	   <?= Html::encode($model->student_registration) ?><br>
       <b><?php echo 'Name:' ?></b>
	   <?= Html::encode($model->student_first_name.$model->student_middle_name.$model->student_last_name) ?><br>
       <b><?php echo 'Father Name:' ?></b>
	   <?= Html::encode($model->father_first_name.$model->father_middle_name.$model->father_last_name) ?><br>
       <b><?php echo 'CNIC:' ?></b>
	   <?= Html::encode($model->student_cnic) ?><br>
       <b><?php echo 'Phone No:' ?></b>
	   <?= Html::encode($model->student_phone_no_1) ?>
       <?php echo "," ?>
	   <?= Html::encode($model->student_phone_no_2) ?><br>
       <b><?php echo 'Email:' ?></b>
	   <?= Html::encode($model->student_email) ?><br>
       
       </p>
       </td>

   

</tr>
<tr>
       <td style="padding-top: 20px; padding-left:100px;">
       
       <h4> <span class="bg-info text-center rounded" style="padding-left:30px; padding-right:30px;">Academic Details<span> <br>
       </h4>
       <p >
       <b><?php echo 'Course:' ?></b>
	   <?= Html::encode($model->degree0->course_name) ?><br>
       <b><?php echo 'Btach:' ?></b>
	   <?= Html::encode($model->batch0->batch_name) ?><br>
       <b><?php echo 'Section:' ?></b>
	   <?= Html::encode($model->section0->section_name) ?><br>
       <b><?php echo 'Start Date:' ?></b>
	   <?= Html::encode($model->degree_start_date) ?><br>
       <b><?php echo 'End Date:' ?></b>
	   <?= Html::encode($model->degree_end_date) ?><br>
       <b><?php echo 'Status:' ?></b>
	   <?= Html::encode($model->student_status) ?><br>
       </p>
       </td>
       <td style="padding-top: 20px; padding-left:100px;">
       
       <h4> <span class="bg-info text-center rounded" style="padding-left:30px; padding-right:30px;">Guardian Details<span> <br>
       </h4>
       <p >
       <b><?php echo 'Guardian Name:' ?></b>
	   <?= Html::encode($model->guardian_first_name.$model->guardian_middle_name.$model->guardian_last_name) ?><br>
       <b><?php echo 'Guardian CNIC:' ?></b>
	   <?= Html::encode($model->guardian_cnic) ?><br>
       <b><?php echo 'Guardian Relation:' ?></b>
	   <?= Html::encode($model->guardian_relation) ?><br>
       <b><?php echo 'Email:' ?></b>
	   <?= Html::encode($model->guardian_email) ?><br>
       <b><?php echo 'Phone No:' ?></b>
	   <?= Html::encode($model->guardian_phone_no_1) ?>
       <?php echo "," ?>
       <?= Html::encode($model->guardian_phone_no_2) ?>
       </p>
       </td>
      


  
      
</tr>
<tr>
       <td style="padding-top: 20px; padding-left:100px;">
       
       <h4> <span class="bg-info text-center rounded" style="padding-left:30px; padding-right:30px;">Previous Education<span> <br>
       </h4>
       <p >
       <b><?php echo 'Matric:' ?></b>
	   <?= Html::encode($model->previousDegree1->degree_name) ?><br>
       <b><?php echo 'Start Date:' ?></b>
	   <?= Html::encode($model->matric_degree_start_date) ?><br>
       <b><?php echo 'End Date:' ?></b>
	   <?= Html::encode($model->matric_degree_end_date) ?><br>
       <b><?php echo 'Marks Obtain:' ?></b>
	   <?= Html::encode($model->matric_marks_obtained) ?><br>
       <b><?php echo 'Total Marks:' ?></b>
	   <?= Html::encode($model->matric_marks_total) ?><br>
       <b><?php echo 'Percentage:' ?></b>
	   <?= Html::encode($model->matric_marks_percentage) ?><br>

       <b><?php echo 'Intermediate:' ?></b>
	   <?= Html::encode($model->previousDegree2->degree_name) ?><br>
       <b><?php echo 'Start Date:' ?></b>
	   <?= Html::encode($model->inter_degree_start_date) ?><br>
       <b><?php echo 'End Date:' ?></b>
	   <?= Html::encode($model->inter_degree_end_date) ?><br>
       <b><?php echo 'Marks Obtain:' ?></b>
	   <?= Html::encode($model->inter_marks_obtain) ?><br>
       <b><?php echo 'Total Marks:' ?></b>
	   <?= Html::encode($model->inter_marks_total) ?><br>
       <b><?php echo 'Percentage:' ?></b>
	   <?= Html::encode($model->inter_marks_percentage) ?><br>
      
       </p>
       </td>
       <td style="padding-top:20px; padding-left:100px;">
       
       <h4> <span class="bg-info text-center rounded" style="padding-left:30px; padding-right:30px;">Residential Details<span> <br>
       </h4>
       <p>
       <b><h5>Permanent Address </h5></b>
       <b><?php echo 'Address:' ?></b>
	   <?= Html::encode($model->student_permanent_address_1) ?><br>
	   <?= Html::encode($model->student_permanent_address_2) ?><br>
       <b><?php echo 'Country:' ?></b>
	   <?= Html::encode($model->permanentCountry->country_name) ?><br>
       <b><?php echo 'Province:' ?></b>
	   <?= Html::encode($model->permanentProvince->province_name) ?><br>
       <b><?php echo 'City:' ?></b>
	   <?= Html::encode($model->permanentCity->city_name) ?><br>
       <b><?php echo 'Zip/Postal code:' ?></b>
	   <?= Html::encode($model->premanent_city_zip_code) ?><br>
            <br>
       <b>Temporary Address</b><br>
       <b><?php echo 'Address:' ?></b>
	   <?= Html::encode($model->student_temporary_address_1) ?><br>
	   <?= Html::encode($model->student_temporary_address_2) ?><br>
       <b><?php echo 'Country:' ?></b>
	   <?= Html::encode($model->temporaryCountry->country_name) ?><br>
       <b><?php echo 'Province:' ?></b>
	   <?= Html::encode($model->temporaryProvince->province_name) ?><br>
       <b><?php echo 'City:' ?></b>
	   <?= Html::encode($model->temporaryCity->city_name) ?><br>
       <b><?php echo 'Zip/Postal code:' ?></b>
	   <?= Html::encode($model->temporary_city_zip_code) ?><br>
      
       </p>
       </td>
     
       
    </tr>
</table>

   
</div>
