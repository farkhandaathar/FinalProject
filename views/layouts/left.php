<?php
use yii\bootstrap\Nav;

?>
<style>

</style>

<aside class="left-side sidebar-offcanvas">

    <section class="sidebar">
    <div style="padding-left:10px; ">
        <img src="images/logo.png" alt="col-logo" width="150px">
        <h4 style="text-transform:uppercase;  font-weight:bold; font-family:Georgia; margin-top: -10px; "><span style="color:red";>Graduate</span> <span style="color:blue";>School<span></h4> 

      <!-- <?php if (!Yii::$app->user->isGuest) : ?>
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?= $directoryAsset ?>/img/avatar5.png" class="img-circle" alt="User Image"/>
                </div>
                <div class="pull-left info">
                    <p>Hello, <?= @Yii::$app->user->identity->username ?></p>
                    <a href="<?= $directoryAsset ?>/#">
                        <i class="fa fa-circle text-success"></i> Online
                    </a>
                </div>
            </div>
        <?php endif ?>-->
            
        
        
        <?=
        Nav::widget([

            'items' => [
                  
                   
                ['label'=> 'Configuration', 
                     'items'=>[
                         ['label'=>'Country', 'url'=> ['/configuration/country/index'], 'iconStyle' => 'fas fa-angle-right'],
                         ['label'=>'Province', 'url'=> ['/configuration/province/index'], 'iconStyle' => 'fas fa-angle-right'],
                         ['label'=>'City', 'url'=> ['/configuration/city/index'], 'iconStyle' => 'fas fa-angle-right'],
                         ['label'=>'Department', 'url'=> ['/configuration/department/index'], 'iconStyle' => 'fas fa-angle-right'],
                         ['label'=>'Category', 'url'=> ['/configuration/category/index'], 'iconStyle' => 'fas fa-angle-right'],
                         ['label'=>'Designation', 'url'=> ['/configuration/designation/index'], 'iconStyle' => 'fas fa-angle-right'],
                     ],
                 ],

                 ['label'=> 'Course Details',
                 'items'=>[
                     ['label'=>'Courses', 'url'=> ['/Courses/courses/index'], 'iconStyle' => 'fas fa-angle-right'],
                     ['label'=>'Batches', 'url'=> ['/Courses/batches/index'], 'iconStyle' => 'fas fa-angle-right'],
                     ['label'=>'Sections', 'url'=> ['/Courses/section/index'], 'iconStyle' => 'fas fa-angle-right'],
                     ['label'=>'Subjects', 'url'=> ['/Courses/subjects/index'], 'iconStyle' => 'fas fa-angle-right'],
                     ['label'=>'Semesters', 'url'=> ['/Courses/semesters/index'], 'iconStyle' => 'fas fa-angle-right'],
                     ['label'=>'Previous Degrees', 'url'=> ['/Courses/previous-degrees/index'], 'iconStyle' => 'fas fa-angle-right'],
                     
                 ],
             ],
                // ['label'=> 'Dashborad'],
               
                 ['label'=> 'Students',
                 'items'=>[
                     ['label'=>'Add Students', 'url'=> ['/StudentInformation/students/index'], 'iconStyle' => 'fas fa-angle-right'],
                     ['label'=>'Semester1 students', 'url'=> ['/StudentInformation/first-semester/index'], 'iconStyle' => 'fas fa-angle-right'],
                     ['label'=>'Semester2 students', 'url'=> ['/StudentInformation/second-semester/index'], 'iconStyle' => 'fas fa-angle-right'],
                    
                     
                 ],
             ],

             ['label'=> 'Teachers',
             'items'=>[
                 ['label'=>'Add Teachers', 'url'=> ['/TeacherInformation/teachers/index'], 'iconStyle' => 'fas fa-angle-right'],
                
                 
             ],
         ],
        

         ['label'=> 'Staff',
         'items'=>[
             ['label'=>'Add Staff', 'url'=> ['/StaffInformation/staff-members/index'], 'iconStyle' => 'fas fa-angle-right'],
            
             
         ],
     ],
     ['label'=> 'Announcements',
     'items'=>[
         ['label'=>'Notices', 'url'=> ['/Announcements/notices/index'], 'iconStyle' => 'fas fa-angle-right'],
         ['label'=>'Events', 'url'=> ['/Announcements/events/index'], 'iconStyle' => 'fas fa-angle-right'],
         ['label'=>'Emails', 'url'=> ['/Announcements/emails/index'], 'iconStyle' => 'fas fa-angle-right'],

     ],
    ],
    ['label'=> 'User rights',
                 
    'items'=>[
       // ['label'=>'Login', 'url'=> ['admin/user/login'], 'iconStyle' => 'fas fa-angle-right'],
       // ['label'=>'Signup', 'url'=> ['admin/user/signup'], 'iconStyle' => 'fas fa-angle-right'],
        ['label'=>'Routes', 'url'=> ['admin/route'], 'iconStyle' => 'fas fa-angle-right'],
        ['label'=>'Rules', 'url'=> ['admin/rule'], 'iconStyle' => 'fas fa-angle-right'],
        ['label'=>'Assignments', 'url'=> ['admin/assignment'], 'iconStyle' => 'fas fa-angle-right'],
        ['label'=>'Roles', 'url'=> ['admin/role'], 'iconStyle' => 'fas fa-angle-right'],
        ['label'=>'Menus', 'url'=> ['admin/menu'], 'iconStyle' => 'fas fa-angle-right'],
        ['label'=>'Permission', 'url'=> ['admin/permission'], 'iconStyle' => 'fas fa-angle-right'],
        ['label'=>'Users', 'url'=> ['admin/user'], 'iconStyle' => 'fas fa-angle-right'],
    ],
],
     
  
        ['label'=> 'Generate Result' , 'url'=>['/ResultRecord/result/index']],
                
          
                
                
            ],
        ],


     
        
        );
        ?>
 
       </div>
    </section>

</aside>
