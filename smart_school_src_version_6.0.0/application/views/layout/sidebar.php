<aside class="main-sidebar" id="alert2">
    <?php if ($this->rbac->hasPrivilege('student', 'can_view')) { ?>
        <form class="navbar-form navbar-left search-form2" role="search"  action="<?php echo site_url('admin/admin/search'); ?>" method="POST">
            <?php echo $this->customlib->getCSRF(); ?>
            <div class="input-group ">

                <input type="text"  name="search_text" class="form-control search-form" placeholder="<?php echo $this->lang->line('search_by_student_name'); ?>">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" style="padding: 3px 12px !important;border-radius: 0px 30px 30px 0px; background: #fff;" class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
    <?php } ?>
    <section class="sidebar" id="sibe-box">
        <?php $this->load->view('layout/top_sidemenu'); ?>
        <ul class="sidebar-menu verttop">
            <?php
            

            if ($this->module_lib->hasActive('student_information')) {
                if (($this->rbac->hasPrivilege('student', 'can_view') ||
                        $this->rbac->hasPrivilege('student', 'can_add') ||
                        $this->rbac->hasPrivilege('student_history', 'can_view') ||
                        $this->rbac->hasPrivilege('student_categories', 'can_view') ||
                        $this->rbac->hasPrivilege('student_houses', 'can_view') ||
                        $this->rbac->hasPrivilege('disable_student', 'can_view') || $this->rbac->hasPrivilege('disable_reason','can_view') || $this->rbac->hasPrivilege('online_admission', 'can_view') || $this->rbac->hasPrivilege('multiclass_student','can_view') || $this->rbac->hasPrivilege('disable_reason','can_view'))) {
                    ?>


                    <li class="treeview <?php echo set_Topmenu('Student Information'); ?>">
                        <a href="#">
                            <i class="fa fa-user-plus ftlayer"></i> <span><?php echo $this->lang->line('student_information'); ?></span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <?php
                            if ($this->rbac->hasPrivilege('student', 'can_view')) {
                                ?>

                                <li class="<?php echo set_Submenu('student/search'); ?>"><a href="<?php echo base_url(); ?>student/search"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('student_details'); ?></a></li>

                                <?php
                            }

                            if ($this->rbac->hasPrivilege('student', 'can_add')) {
                                ?>

                                <li class="<?php echo set_Submenu('student/create'); ?>"><a href="<?php echo base_url(); ?>student/create"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('student_admission'); ?></a></li>
                            <?php } ?><?php 
                                if ($this->module_lib->hasActive('online_admission')) {
                            if ($this->rbac->hasPrivilege('online_admission', 'can_view')) { ?>

                                

                                <?php
                            } }

                            if ($this->rbac->hasPrivilege('disable_student', 'can_view')) {
                                ?>
                                <li class="<?php echo set_Submenu('student/disablestudentslist'); ?>"><a href="<?php echo base_url(); ?>student/disablestudentslist"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('disabled_students'); ?></a></li>
                                <?php
                            } 
                             if ($this->module_lib->hasActive('multi_class')) {
                            if($this->rbac->hasPrivilege('multi_class_student','can_view')){
                                ?>
                                <li class="<?php echo set_Submenu('student/multiclass'); ?>"><a href="<?php echo base_url(); ?>student/multiclass"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('multiclass') . " " . $this->lang->line('student'); ?></a></li>
                                <?php
                            } }
                            if($this->rbac->hasPrivilege('student','can_delete')){
                                ?>
                                <li class="<?php echo set_Submenu('bulkdelete'); ?>"><a href="<?php echo site_url('student/bulkdelete'); ?>"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('bulk') . " " . $this->lang->line('delete'); ?></a>
                            </li>
                                <?php
                            }
                           
                            if ($this->rbac->hasPrivilege('student_categories', 'can_view')) {
                                ?>

                                

                            <?php }
                            ?>
                             <?php
                            if ($this->rbac->hasPrivilege('student_houses', 'can_view')) {
                                ?>
                               
                                <?php
                            }

                            if($this->rbac->hasPrivilege('disable_reason','can_view')){
                                ?>
                                 <li class="<?php echo set_Submenu('student/disable_reason'); ?>"><a href="<?php echo base_url(); ?>admin/disable_reason"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('disable') . " " . $this->lang->line('reason'); ?></a></li>
                                <?php
                            }
                            ?>
                           
                           

                        </ul>
                    </li>
                    <?php
                }
            }
            if ($this->module_lib->hasActive('student_attendance')) {
                if (($this->rbac->hasPrivilege('student_attendance', 'can_view') ||
                        $this->rbac->hasPrivilege('student_attendance_report', 'can_view') ||
                        $this->rbac->hasPrivilege('attendance_report', 'can_view'))) {
                    ?>
                    <li class="treeview <?php echo set_Topmenu('Attendance'); ?>">
                        <a href="#">
                            <i class="fa fa-calendar-check-o ftlayer"></i> <span><?php echo $this->lang->line('attendance'); ?></span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <?php
                            if (!is_subAttendence()) {
                                if ($this->rbac->hasPrivilege('student_attendance', 'can_view')) {
                                    ?>
                                   
                                    <?php
                                }
                                if ($this->rbac->hasPrivilege('attendance_by_date', 'can_view')) {
                                    ?>
                                    
                                    <?php
                                }
                            } else {
                                if ($this->rbac->hasPrivilege('student_attendance', 'can_view')) {
                                    ?>
                                    
                                    <?php
                                }
                                 if ($this->rbac->hasPrivilege('attendance_by_date', 'can_view')) {
                                ?>
                               
                                
                                

                                <?php
                            } }
                            if($this->rbac->hasPrivilege('approve_leave','can_view')){
                            ?>


                            <li class="<?php echo set_Submenu('Attendance/approve_leave'); ?>"><a href="<?php echo base_url(); ?>admin/approve_leave"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('approve') . " " . $this->lang->line('leave'); ?></a></li>
                        <?php } ?>
                        </ul>
                    </li>
                    <?php
                }
                ?>

                <?php
            }
            if ($this->module_lib->hasActive('examination')) {
                if (($this->rbac->hasPrivilege('exam_group', 'can_view') ||
                        $this->rbac->hasPrivilege('exam_result', 'can_view') ||
                        $this->rbac->hasPrivilege('design_admit_card','can_view') ||
                        $this->rbac->hasPrivilege('print_admit_card','can_view') ||
                        $this->rbac->hasPrivilege('design_marksheet','can_view') ||
                        $this->rbac->hasPrivilege('print_marksheet','can_view') ||
                        $this->rbac->hasPrivilege('marks_grade', 'can_view')
                    )) {
                    ?>
                    <li class="treeview <?php echo set_Topmenu('Examinations'); ?>">
                        <a href="#">
                            <i class="fa fa-map-o ftlayer"></i> <span><?php echo $this->lang->line('examinations'); ?></span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">

                            <?php if ($this->rbac->hasPrivilege('exam_group', 'can_view')) { ?>
                                <li class="<?php echo set_Submenu('Examinations/examgroup'); ?>"><a href="<?php echo site_url('admin/examgroup'); ?>"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('exam') . " " . $this->lang->line('group') ?></a></li>
                                <?php
                            } ?>
                        <li class="<?php echo set_Submenu('Examinations/Examschedule'); ?>"><a href="<?php echo site_url('admin/exam_schedule'); ?>"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('exam_schedule'); ?></a></li>
                          <?php  if ($this->rbac->hasPrivilege('exam_result', 'can_view')) {
                                ?>
                                <li class="<?php echo set_Submenu('Examinations/Examresult'); ?>"><a href="<?php echo site_url('admin/examresult'); ?>"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('exam') . " " . $this->lang->line('result'); ?></a></li>
                                <?php
                            } 
                            if($this->rbac->hasPrivilege('design_admit_card','can_view')){
                                ?>
                                
                                <?php
                            }
                            if($this->rbac->hasPrivilege('print_admit_card','can_view')){
                                ?>
                                
                                <?php
                            }
                            if($this->rbac->hasPrivilege('design_marksheet','can_view')){
                                ?>
                                
                                <?php
                            }
                            if($this->rbac->hasPrivilege('print_marksheet','can_view')){
                                ?>
                                
                                <?php
                            }
                            
                            if ($this->rbac->hasPrivilege('marks_grade', 'can_view')) {
                                ?>
                                <li class="<?php echo set_Submenu('Examinations/grade'); ?>"><a href="<?php echo base_url(); ?>admin/grade"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('marks_grade'); ?></a></li> <?php } ?>

                          

                         </ul>
                    </li>
                    <?php
                } }
                  if ($this->module_lib->hasActive('online_examination')) {
                    if(($this->rbac->hasPrivilege('online_examination','can_view') || $this->rbac->hasPrivilege('question_bank','can_view'))){
                 ?>
                    <li class="treeview <?php echo set_Topmenu('Online_Examinations'); ?>">
                        <a href="#">
                            <i class="fa fa-rss ftlayer"></i> <span><?php echo $this->lang->line('online')." ".$this->lang->line('examinations'); ?></span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                          <?php
                           
                          if($this->rbac->hasPrivilege('online_examination','can_view')){
                            ?>
                            <li class="<?php echo set_Submenu('Online_Examinations/Onlineexam'); ?>"><a href="<?php echo base_url(); ?>admin/onlineexam"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('online') . " " . $this->lang->line('exam'); ?></a></li>
                            <?php
                          }
                          if($this->rbac->hasPrivilege('question_bank','can_view')){
                            ?>
                              <li class="<?php echo set_Submenu('Online_Examinations/question'); ?>"><a href="<?php echo base_url(); ?>admin/question"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('question')." ".$this->lang->line('bank'); ?></a></li>
                            <?php
                          }
                          ?>  
                    

                  
                        </ul>
                    </li>
                <?php
            }}
            ?> <?php
            if($this->module_lib->hasActive('lesson_plan')){
                if(($this->rbac->hasPrivilege('manage_lesson_plan','can_view')) || ($this->rbac->hasPrivilege('manage_syllabus_status','can_view')) || ($this->rbac->hasPrivilege('lesson','can_view')) || ($this->rbac->hasPrivilege('topic','can_view'))){
             ?>
            <li class="treeview <?php echo set_Topmenu('lessonplan'); ?>">
                        <a href="#">
                            <i class="fa fa-list-alt ftlayer"></i> <span><?php echo $this->lang->line('lesson_plan'); ?></span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <?php if($this->rbac->hasPrivilege('manage_lesson_plan','can_view')){?>
                            <li class="<?php echo set_Submenu('admin/syllabus'); ?>"><a href="<?php echo base_url(); ?>admin/syllabus"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('manage_lesson_plan'); ?></a></li>
                        <?php } ?>
                          <?php if($this->rbac->hasPrivilege('manage_syllabus_status','can_view')){?>
                            <li class="<?php echo set_Submenu('admin/lessonplan'); ?>"><a href="<?php echo base_url(); ?>admin/syllabus/status"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('manage_syllabus_status'); ?></a></li>
                              <?php } if($this->rbac->hasPrivilege('lesson','can_view')){?>
                            <li class="<?php echo set_Submenu('admin/lessonplan/lesson'); ?>"><a href="<?php echo base_url(); ?>admin/lessonplan/lesson"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('lesson'); ?></a></li>
                              <?php } if($this->rbac->hasPrivilege('topic','can_view')){?>
                            <li class="<?php echo set_Submenu('admin/lessonplan/topic'); ?>"><a href="<?php echo base_url(); ?>admin/lessonplan/topic"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('topic'); ?></a></li>
                        <?php }?>
                            
                        </ul>
                    </li>
            <?php } }?>
            <?php
            if ($this->module_lib->hasActive('academics')) {
                if (($this->rbac->hasPrivilege('class_timetable', 'can_view') ||
                        $this->rbac->hasPrivilege('teachers_timetable', 'can_view') ||
                        $this->rbac->hasPrivilege('assign_class_teacher', 'can_view') ||
                        $this->rbac->hasPrivilege('promote_student', 'can_view') ||
                        $this->rbac->hasPrivilege('subject_group', 'can_view') ||
                        $this->rbac->hasPrivilege('section', 'can_view') || 
                        $this->rbac->hasPrivilege('subject', 'can_view') ||
                        $this->rbac->hasPrivilege('class', 'can_view') || 
                        $this->rbac->hasPrivilege('section', 'can_view')
                        )) {
                    ?>
                    <li class="treeview <?php echo set_Topmenu('Academics'); ?>">
                        <a href="#">
                            <i class="fa fa-mortar-board ftlayer"></i> <span><?php echo $this->lang->line('academics'); ?></span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">

                            <?php if ($this->rbac->hasPrivilege('class_timetable', 'can_view')) { ?>
                                <li class="<?php echo set_Submenu('Academics/timetable'); ?>"><a href="<?php echo base_url(); ?>admin/timetable/classreport"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('class_timetable'); ?></a></li>
                                <?php
                            }

                            if ($this->rbac->hasPrivilege('teachers_time_table', 'can_view')) {
                                ?>
                                <li class="<?php echo set_Submenu('Academics/timetable/mytimetable'); ?>"><a href="<?php echo base_url(); ?>admin/timetable/mytimetable"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('teachers')." ".$this->lang->line('timetable')?></a></li>
                                <?php
                            }

                            if ($this->rbac->hasPrivilege('assign_class_teacher', 'can_view')) {
                                ?>
                                <li class="<?php echo set_Submenu('admin/teacher/assign_class_teacher'); ?>"><a href="<?php echo base_url(); ?>admin/teacher/assign_class_teacher"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('assign_class_teacher'); ?></a></li>
                                <?php
                            }

                            if ($this->rbac->hasPrivilege('promote_student', 'can_view')) {
                                ?>

                                <li class="<?php echo set_Submenu('stdtransfer/index'); ?>"><a href="<?php echo base_url(); ?>admin/stdtransfer"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('promote_students'); ?></a></li>
                                <?php
                            }
                            if ($this->rbac->hasPrivilege('subject_group', 'can_view')) {
                                ?>
                                <li class="<?php echo set_Submenu('subjectgroup/index'); ?>"><a href="<?php echo base_url('admin/subjectgroup'); ?>"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('subject') . " " . $this->lang->line('group') ?></a></li>
                                <?php
                            }
                            if ($this->rbac->hasPrivilege('subject', 'can_view')) {
                                ?>
                                <li class="<?php echo set_Submenu('Academics/subject'); ?>"><a href="<?php echo base_url(); ?>admin/subject"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('subjects'); ?></a></li>
                                <?php
                            }

                            

                            if ($this->rbac->hasPrivilege('class', 'can_view')) {
                                ?>
                                <li class="<?php echo set_Submenu('classes/index'); ?>"><a href="<?php echo base_url(); ?>classes"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('class'); ?></a></li>
                                <?php
                            }

                            if ($this->rbac->hasPrivilege('section', 'can_view')) {
                                ?>
                                <li class="<?php echo set_Submenu('sections/index'); ?>"><a href="<?php echo base_url(); ?>sections"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('sections'); ?></a></li>
                                <?php
                            }
                            ?>

                        </ul>
                    </li>
                    <?php
                }
            }
            ?>
           
                <?php 
            if ($this->module_lib->hasActive('human_resource')) {
                if (($this->rbac->hasPrivilege('staff', 'can_view') ||
                        
                        $this->rbac->hasPrivilege('approve_leave_request', 'can_view') ||
                        $this->rbac->hasPrivilege('apply_leave', 'can_view') ||
                        $this->rbac->hasPrivilege('leave_types', 'can_view') ||
                        $this->rbac->hasPrivilege('teachers_rating','can_view') ||
                        $this->rbac->hasPrivilege('department', 'can_view') ||
                        $this->rbac->hasPrivilege('designation', 'can_view') ||
                        $this->rbac->hasPrivilege('disable_staff', 'can_view'))) {
                    ?>
                    <li class="treeview <?php echo set_Topmenu('Staff'); ?>">
                        <a href="#">
                            <i class="fa fa-sitemap ftlayer"></i> <span><?php echo $this->lang->line('staff'); ?></span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <?php if ($this->rbac->hasPrivilege('staff', 'can_view')) { ?>
                                <li class="<?php echo set_Submenu('HR/staff'); ?>"><a href="<?php echo base_url(); ?>admin/staff"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('staff_directory'); ?></a></li>

                                <?php
                            } ?>
                            
                            <?php
                            if ($this->rbac->hasPrivilege('staff_attendance', 'can_view')) {
                                ?>
                                
                                
                                <?php
                            }

                            if ($this->rbac->hasPrivilege('approve_leave_request', 'can_view')) {
                                ?>
                                <li class="<?php echo set_Submenu('admin/leaverequest/leaverequest'); ?>"><a href="<?php echo base_url(); ?>admin/leaverequest/leaverequest"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('approve_leave_request'); ?></a></li>

                                <?php
                            }
                            if ($this->rbac->hasPrivilege('apply_leave', 'can_view')) {
                                ?>
                                <li class="<?php echo set_Submenu('admin/staff/leaverequest'); ?>"><a href="<?php echo base_url(); ?>admin/staff/leaverequest"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('apply_leave'); ?></a></li>
                                <?php
                            }
                            if ($this->rbac->hasPrivilege('leave_types', 'can_view')) {
                                ?>

                                <li class="<?php echo set_Submenu('admin/leavetypes'); ?>"><a href="<?php echo base_url(); ?>admin/leavetypes"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('leave_type'); ?></a></li>

                            <?php }
                            if($this->rbac->hasPrivilege('teachers_rating','can_view')){
                                ?>
                                <li class="<?php echo set_Submenu('HR/rating'); ?>"><a href="<?php echo base_url(); ?>admin/staff/rating"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('teachers') . " " . $this->lang->line('rating'); ?></a></li>
                                <?php
                            }
                            
                            if ($this->rbac->hasPrivilege('department', 'can_view')) {
                                ?>
                                <li class="<?php echo set_Submenu('admin/department/department'); ?>"><a href="<?php echo base_url(); ?>admin/department/department"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('department'); ?></a></li>

                                <?php
                            }
                            if ($this->rbac->hasPrivilege('designation', 'can_view')) {
                                ?>
                                <li class="<?php echo set_Submenu('admin/designation/designation'); ?>"><a href="<?php echo base_url(); ?>admin/designation/designation"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('designation'); ?></a></li>
                                <?php 
                            }
                            if ($this->rbac->hasPrivilege('disable_staff', 'can_view')) {
                                ?>

                                <li class="<?php echo set_Submenu('HR/staff/disablestafflist'); ?>"><a href="<?php echo base_url(); ?>admin/staff/disablestafflist"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('disabled_staff'); ?></a></li>
                            <?php } ?>
                        </ul>
                    </li>
                    <?php
                }
            }

            if ($this->module_lib->hasActive('communicate')) {
                if (($this->rbac->hasPrivilege('notice_board', 'can_view') ||
                        $this->rbac->hasPrivilege('email', 'can_view') ||
                        $this->rbac->hasPrivilege('sms', 'can_view') ||
                        $this->rbac->hasPrivilege('email_sms_log', 'can_view'))) {
                    ?>
                    <li class = "treeview <?php echo set_Topmenu('Communicate'); ?>">
                        <a href = "#">
                            <i class="fa fa-bullhorn ftlayer"></i> <span><?php echo $this->lang->line('communicate');
                    ?></span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            
                            <?php
                            if ($this->rbac->hasPrivilege('notice_board', 'can_view')) {
                                ?>
                                <li class="<?php echo set_Submenu('notification/index'); ?>"><a href="<?php echo base_url(); ?>admin/notification"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('notice_board'); ?></a></li>
                                
                            <?php } ?>
                        </ul>
                    </li>
                    <?php
                }
            }
            ?>
            <?php
            
            ?>

 

            <?php
            if ($this->module_lib->hasActive('download_center')) {
                if (($this->rbac->hasPrivilege('upload_content', 'can_view'))) {
                    ?>
                    <li class="treeview <?php echo set_Topmenu('Download Center'); ?>">
                        <a href="#">
                            <i class="fa fa-download ftlayer"></i> <span><?php echo $this->lang->line('download_center'); ?></span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <?php if ($this->rbac->hasPrivilege('upload_content', 'can_view')) { ?>
                                <li class="<?php echo set_Submenu('admin/content'); ?>"><a href="<?php echo base_url(); ?>admin/content"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('upload_content'); ?></a></li>
                            <?php } ?>
                            <li class="<?php echo set_Submenu('content/assignment'); ?>"><a href="<?php echo base_url(); ?>admin/content/assignment"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('assignments'); ?></a></li>
                            <li class="<?php echo set_Submenu('content/studymaterial'); ?>"><a href="<?php echo base_url(); ?>admin/content/studymaterial"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('study_material'); ?></a></li>
                            <li class="<?php echo set_Submenu('content/syllabus'); ?>"><a href="<?php echo base_url(); ?>admin/content/syllabus"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('syllabus'); ?></a></li>
                            <li class="<?php echo set_Submenu('content/other'); ?>"><a href="<?php echo base_url(); ?>admin/content/other"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('other_downloads'); ?></a></li>
                        </ul>
                    </li>
                    <?php
                }
            }

            if ($this->module_lib->hasActive('homework')) {
                if (($this->rbac->hasPrivilege('homework', 'can_view'))) {
                    ?>
                    <li class="treeview <?php echo set_Topmenu('Homework'); ?>">
                        <a href="#">
                            <i class="fa fa-flask ftlayer"></i> <span><?php echo $this->lang->line('homework'); ?></span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <?php if ($this->rbac->hasPrivilege('homework', 'can_view')) { ?>
                                <li class="<?php echo set_Submenu('homework'); ?>"><a href="<?php echo base_url(); ?>homework"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('add_homework'); ?></a></li>
                            <?php } ?>
                        </ul>
                    </li>
                    <?php
                }
            }
            if ($this->module_lib->hasActive('library')) {
                if (($this->rbac->hasPrivilege('books', 'can_view') ||
                       
                        $this->rbac->hasPrivilege('issue_return', 'can_view') ||
                        $this->rbac->hasPrivilege('add_staff_member', 'can_view') ||
                        $this->rbac->hasPrivilege('add_student', 'can_view')
                        )) {
                    ?>
                    <li class="treeview <?php echo set_Topmenu('Library'); ?>">
                        <a href="#">
                            <i class="fa fa-book ftlayer"></i> <span><?php echo $this->lang->line('library'); ?></span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">


                            <?php if ($this->rbac->hasPrivilege('books', 'can_view')) { ?>
                                <li class="<?php echo set_Submenu('book/getall'); ?>">
                                    <a href="<?php echo base_url(); ?>admin/book/getall"><i class="fa fa-angle-double-right"></i><?php echo $this->lang->line('book_list'); ?></a></li>
                            <?php }if ($this->rbac->hasPrivilege('issue_return', 'can_view')) { ?>
                                <li class="<?php echo set_Submenu('member/index'); ?>"><a href="<?php echo base_url(); ?>admin/member"><i class="fa fa-angle-double-right"></i><?php echo $this->lang->line('issue_return'); ?></a></li>
                            <?php } ?>
                            <?php if ($this->rbac->hasPrivilege('add_student', 'can_view')) { ?>
                                <li class="<?php echo set_Submenu('member/student'); ?>"><a href="<?php echo base_url(); ?>admin/member/student"><i class="fa fa-angle-double-right"></i><?php echo $this->lang->line('add_student'); ?></a></li>
                            <?php } ?>
                            <?php if ($this->rbac->hasPrivilege('add_staff_member', 'can_view')) { ?>
                                <li class="<?php echo set_Submenu('Library/member/teacher'); ?>"><a href="<?php echo base_url(); ?>admin/member/teacher"><i class="fa fa-angle-double-right"></i><?php echo $this->lang->line('add_staff_member'); ?></a></li>
                            <?php } ?>
                            
                           

                        </ul>
                    </li>
                    <?php
                } 
            }


            
            
            ?>
 <?php
            if($this->module_lib->hasActive('alumni')){
                if(($this->rbac->hasPrivilege('manage_alumni','can_view')) || ($this->rbac->hasPrivilege('events','can_view'))){
             ?>
            
            
            <li class="treeview <?php echo set_Topmenu('alumni/events'); ?>">
                        <a href="#">
                            <i class="fa fa-universal-access ftlayer"></i> <span><?php echo $this->lang->line('alumni'); ?></span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <?php if($this->rbac->hasPrivilege('manage_alumni','can_view')){?>
                           <li class="<?php echo set_Submenu('alumni/alumnilist'); ?>"><a href="<?php echo base_url(); ?>admin/alumni/alumnilist"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('manage_alumini'); ?></a></li>
                       <?php } ?>
                       <?php if($this->rbac->hasPrivilege('events','can_view')){?>
                            <li class="<?php echo set_Submenu('alumni/event'); ?>"><a href="<?php echo base_url(); ?>admin/alumni/events"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('events'); ?></a></li>
                        <?php } ?>
                           
                        </ul>
                    </li>
                <?php } } ?>
            <?php
            if ($this->module_lib->hasActive('reports')) {
                if (($this->rbac->hasPrivilege('student_report', 'can_view') ||
                        $this->rbac->hasPrivilege('guardian_report', 'can_view') ||
                        $this->rbac->hasPrivilege('student_history', 'can_view') ||
                        $this->rbac->hasPrivilege('student_login_credential_report', 'can_view') ||
                        $this->rbac->hasPrivilege('class_subject_report', 'can_view') ||
                        $this->rbac->hasPrivilege('admission_report', 'can_view') ||
                        $this->rbac->hasPrivilege('sibling_report', 'can_view') ||
                        $this->rbac->hasPrivilege('evaluation_report', 'can_view') ||
                        $this->rbac->hasPrivilege('student_profile', 'can_view') ||
                        $this->rbac->hasPrivilege('fees_statement', 'can_view') ||
                        $this->rbac->hasPrivilege('balance_fees_report', 'can_view') ||
                        $this->rbac->hasPrivilege('fees_collection_report', 'can_view') ||
                        $this->rbac->hasPrivilege('online_fees_collection_report', 'can_view') ||
                        $this->rbac->hasPrivilege('income_report', 'can_view') ||
                        $this->rbac->hasPrivilege('expense_report', 'can_view') ||
                        $this->rbac->hasPrivilege('payroll_report', 'can_view') ||
                        $this->rbac->hasPrivilege('income_group_report', 'can_view') ||
                        $this->rbac->hasPrivilege('expense_group_report', 'can_view') ||
                        $this->rbac->hasPrivilege('attendance_report', 'can_view') ||
                        $this->rbac->hasPrivilege('staff_attendance_report', 'can_view') ||
                        $this->rbac->hasPrivilege('exam_marks_report', 'can_view') ||
                        $this->rbac->hasPrivilege('online_exam_wise_report', 'can_view') ||
                        $this->rbac->hasPrivilege('online_exams_report', 'can_view') ||
                        $this->rbac->hasPrivilege('online_exams_attempt_report', 'can_view') ||
                        $this->rbac->hasPrivilege('online_exams_rank_report', 'can_view') ||
                        $this->rbac->hasPrivilege('payroll_report', 'can_view') ||
                        $this->rbac->hasPrivilege('transport_report', 'can_view') ||
                        $this->rbac->hasPrivilege('hostel_report', 'can_view') ||
                        $this->rbac->hasPrivilege('audit_trail_report', 'can_view') ||
                        $this->rbac->hasPrivilege('user_log', 'can_view') ||
                        $this->rbac->hasPrivilege('book_issue_report', 'can_view') ||
                        $this->rbac->hasPrivilege('book_due_report', 'can_view') ||
                        $this->rbac->hasPrivilege('book_inventory_report', 'can_view') ||
                        $this->rbac->hasPrivilege('stock_report', 'can_view') ||
                        $this->rbac->hasPrivilege('add_item_report', 'can_view') ||
                        $this->rbac->hasPrivilege('issue_inventory_report', 'can_view') ||
                        $this->rbac->hasPrivilege('syllabus_status_report', 'can_view') ||
                        $this->rbac->hasPrivilege('teacher_syllabus_status_report', 'can_view'))) {
                    ?>
                    <li class="treeview <?php echo set_Topmenu('Reports'); ?>">
                        <a href="#">
                            <i class="fa fa-line-chart ftlayer"></i> <span><?php echo $this->lang->line('reports'); ?></span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <?php
                            if (($this->rbac->hasPrivilege('student_report', 'can_view') ||
                                    $this->rbac->hasPrivilege('guardian_report', 'can_view') ||
                                    $this->rbac->hasPrivilege('student_history', 'can_view') ||
                                    $this->rbac->hasPrivilege('student_login_credential_report', 'can_view') ||
                                    $this->rbac->hasPrivilege('class_subject_report', 'can_view') ||
                                    $this->rbac->hasPrivilege('admission_report', 'can_view') ||
                                    $this->rbac->hasPrivilege('sibling_report', 'can_view') ||
                                    $this->rbac->hasPrivilege('evaluation_report', 'can_view') ||
                                    $this->rbac->hasPrivilege('student_profile', 'can_view'))) {
                                ?>
                                <li class="<?php echo set_Submenu('Reports/student_information'); ?>"><a href="<?php echo base_url(); ?>report/studentinformation"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('student_information'); ?></a></li>
                                
                                <?php
                            }if (($this->rbac->hasPrivilege('attendance_report', 'can_view') ||
                                    $this->rbac->hasPrivilege('staff_attendance_report', 'can_view'))) {
                                ?>

                                
                                <?php
                            }if (($this->rbac->hasPrivilege('rank_report', 'can_view'))) {
                                ?>
                                <li class="<?php echo set_Submenu('Reports/examinations'); ?>"><a href="<?php echo base_url(); ?>report/examinations"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('examinations'); ?></a></li>
                            <?php } 
                            if($this->module_lib->hasActive('online_examination')){
                                if(($this->rbac->hasPrivilege('online_exam_wise_report','can_view') ||
                                $this->rbac->hasPrivilege('online_exams_report','can_view') ||
                                $this->rbac->hasPrivilege('online_exams_attempt_report','can_view') ||
                                $this->rbac->hasPrivilege('online_exams_rank_report','can_view')
                            )){ 
                                    
                                ?>
                                 <li class="<?php echo set_Submenu('Reports/online_examinations'); ?>"><a href="<?php echo base_url(); ?>admin/onlineexam/report"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('online')." ".$this->lang->line('examinations'); ?></a></li>
                                <?php
                            }} 
                          
                            if($this->module_lib->hasActive('lesson_plan')){
                                if(($this->rbac->hasPrivilege('syllabus_status_report','can_view') || $this->rbac->hasPrivilege('teacher_syllabus_status_report','can_view'))){
                            ?>
                             <li class="<?php echo set_Submenu('Reports/lesson_plan'); ?>"><a href="<?php echo base_url(); ?>report/lesson_plan"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('lesson_plan'); ?></a></li>
                            <?php } }
                            if($this->module_lib->hasActive('human_resource')){
                                if(($this->rbac->hasPrivilege('staff_report','can_view') || $this->rbac->hasPrivilege('payroll_report','can_view'))){
                            ?>
                            
                            

                            <?php } }
                            if($this->module_lib->hasActive('library')){
                            if (($this->rbac->hasPrivilege('book_issue_report', 'can_view') ||
                                    $this->rbac->hasPrivilege('book_due_report', 'can_view') ||
                                    $this->rbac->hasPrivilege('book_inventory_report', 'can_view'))) {
                                ?>
                                <li class="<?php echo set_Submenu('Reports/library'); ?>"><a href="<?php echo base_url(); ?>report/library"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('library'); ?></a></li>
                                <?php
                            } }
                            if($this->module_lib->hasActive('alumni')){
                            if ($this->rbac->hasPrivilege('alumni_report', 'can_view')) {
                                ?>
                                <li class="<?php echo set_Submenu('Reports/alumni_report'); ?>"><a href="<?php echo base_url(); ?>report/alumnireport"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('alumni'); ?></a></li>
                                <?php
                            } }
                            if ($this->rbac->hasPrivilege('user_log', 'can_view')) {
                                ?>
                               
                                   <?php
                            }
                            
                            ?>


                        </ul>
                    </li>
                    <?php
                }
            }
            if ($this->module_lib->hasActive('system_settings')) {
                if (($this->rbac->hasPrivilege('general_setting', 'can_edit') ||
                        $this->rbac->hasPrivilege('session_setting', 'can_view') ||
                        $this->rbac->hasPrivilege('notification_setting', 'can_edit') ||
                        $this->rbac->hasPrivilege('sms_setting', 'can_edit') ||
                        $this->rbac->hasPrivilege('email_setting', 'can_edit') ||
                        $this->rbac->hasPrivilege('payment_methods', 'can_edit') ||
                        $this->rbac->hasPrivilege('languages', 'can_view') ||
                        $this->rbac->hasPrivilege('languages', 'can_add') ||
                        $this->rbac->hasPrivilege('backup_restore', 'can_view') ||
                        $this->rbac->hasPrivilege('front_cms_setting', 'can_edit'))) {
                    ?>

                    <li class="treeview <?php echo set_Topmenu('System Settings'); ?>">
                        <a href="#">
                            <i class="fa fa-gears ftlayer"></i> <span><?php echo $this->lang->line('system_settings'); ?></span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <?php
                            if ($this->rbac->hasPrivilege('general_setting', 'can_view')) {
                                ?>
                                <li class="<?php echo set_Submenu('schsettings/index'); ?>"><a href="<?php echo base_url(); ?>schsettings"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('general_settings'); ?></a></li>
                                <?php
                            }
                            if ($this->rbac->hasPrivilege('session_setting', 'can_view')) {
                                ?>
                                <li class="<?php echo set_Submenu('sessions/index'); ?>"><a href="<?php echo base_url(); ?>sessions"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('session_setting'); ?></a></li>
                                <?php
                            }
                            if ($this->rbac->hasPrivilege('notification_setting', 'can_view')) {
                                ?>
                                <li class="<?php echo set_Submenu('notification/setting'); ?>"><a href="<?php echo base_url(); ?>admin/notification/setting"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('notification_setting'); ?></a></li>
                                <?php
                            }

                           
                            
                            if ($this->rbac->hasPrivilege('sms_setting', 'can_view')) {
                                ?>
                                <li class="<?php echo set_Submenu('smsconfig/index'); ?>"><a href="<?php echo base_url(); ?>smsconfig"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('sms_setting'); ?></a></li>
                                <?php
                            }
                            if ($this->rbac->hasPrivilege('email_setting', 'can_view')) {
                                ?>
                                <li class="<?php echo set_Submenu('emailconfig/index'); ?>"><a href="<?php echo base_url(); ?>emailconfig"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('email_setting'); ?></a></li>
                                <?php
                            }

                            if ($this->rbac->hasPrivilege('payment_methods', 'can_view')) {
                                ?>
                                <li class="<?php echo set_Submenu('admin/paymentsettings'); ?>"><a href="<?php echo base_url(); ?>admin/paymentsettings"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('payment_methods'); ?></a></li>
                                <?php
                            }
                             if ($this->rbac->hasPrivilege('print_header_footer', 'can_view')) {
                            ?>
                                <li class="<?php echo set_Submenu('admin/print_headerfooter'); ?>"><a href="<?php echo base_url(); ?>admin/print_headerfooter"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('print_headerfooter'); ?></a></li>
                                <?php }
                            if ($this->module_lib->hasActive('front_cms')) {
                                if ($this->rbac->hasPrivilege('front_cms_setting', 'can_view')) {
                                    ?>
                                    <li class="<?php echo set_Submenu('admin/frontcms/index'); ?>"><a href="<?php echo base_url(); ?>admin/frontcms"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('front_cms_setting'); ?></a></li>
                                    <?php
                                }
                            }
                            ?>
                            <?php if ($this->rbac->hasPrivilege('superadmin')) { ?>
                                <li class="<?php echo set_Submenu('admin/roles'); ?>"><a href="<?php echo base_url(); ?>admin/roles"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('roles_permissions'); ?></a></li>
                                <?php
                            }
                            if ($this->rbac->hasPrivilege('backup', 'can_view')) {
                                ?>
                                <li class="<?php echo set_Submenu('admin/backup'); ?>"><a href="<?php echo base_url(); ?>admin/admin/backup"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('backup / restore'); ?></a></li>
                                <?php
                            }
                            if ($this->rbac->hasPrivilege('languages', 'can_add')) {
                                ?>
                                <li class="<?php echo set_Submenu('language/index'); ?>"><a href="<?php echo base_url(); ?>admin/language"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('languages'); ?></a></li>
                                <?php
                            }
                            if ($this->rbac->hasPrivilege('user_status')) {
                                ?>
                                <li class="<?php echo set_Submenu('users/index'); ?>"><a href="<?php echo base_url(); ?>admin/users"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('users'); ?></a></li>
                                <?php
                            }
                            if ($this->rbac->hasPrivilege('superadmin')) {
                                ?>
                                <li class="<?php echo set_Submenu('System Settings/module'); ?>"><a href="<?php echo base_url(); ?>admin/module"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('modules'); ?></a></li>
                            <?php }
                           if ($this->rbac->hasPrivilege('custom_fields','can_view')) {
                                ?>
                            <li class="<?php echo set_Submenu('System Settings/customfield'); ?>"><a href="<?php echo base_url(); ?>admin/customfield"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('custom') . " " . $this->lang->line('fields'); ?></a></li>
                        <?php } if($this->rbac->hasPrivilege('system_fields','can_view')){
                            ?>
                            <li class="<?php echo set_Submenu('System Settings/systemfield'); ?>"><a href="<?php echo base_url(); ?>admin/systemfield"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('system') . " " . $this->lang->line('fields'); ?></a></li>
                            <?php
                        }?>
                        <li class="<?php echo set_Submenu('System Settings/updater'); ?>"><a href="<?php echo base_url(); ?>admin/updater"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('system_update')?></a></li>  
                        </ul>
                    </li>
                    <?php
                }
            }
            ?>
        </ul>
    </section>
</aside>