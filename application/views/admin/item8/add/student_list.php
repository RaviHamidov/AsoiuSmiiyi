<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 76d0150b9f64b5553f25f3a82b3e49f837971a77
<?php $this->load->view('admin/includes/headerStyle'); ?>

<?php $this->load->view('admin/includes/leftMenu'); ?>

<?php $this->load->view('admin/includes/navbar'); ?>

<?php $this->load->view('admin/includes/pageName'); ?>

<style>
    .p20{
        padding: 20px;
    }

    .noBlock{
        float: left;
    }
</style>
<style>
    ul.tabs{
        margin: 0px;
        padding: 0px;
        list-style: none;
    }
    ul.tabs li{
        background: none;
        color: #222;
        display: inline-block;
        /*padding: 10px 15px;*/
        padding: 5px 10px;
        cursor: pointer;
    }

    ul.tabs li.current{
        /*background: #ededed;*/
        /*color: #222;*/
        background: #16aaff;
        color: white!important;
        border-radius: 5px;
    }

    .tab-content{
        display: none;
        /*background: #ededed;*/
        padding: 15px 0px;
    }

    .tab-content.current{
        display: inherit;
    }

    .tab-link{
        border: 2px solid #16aaff;
        border-radius: 5px;
        color: #16aaff!important;
    }

    .form_error_style{
        color: #FF5B5B;
        font-size: 12px;
        font-weight:bold;
    }
</style>
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Qiymət cədvəli
                <div class="btn-actions-pane-right">
                    <div role="group" class="btn-group-sm btn-group">
                        <a href="<?php echo base_url('admin_create_item_ce'); ?>">
                            <button class="btn btn-info">Back</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="p20">

                <?php if($this->session->flashdata('err')){ ?>
                        <div class="alert alert-danger">
                            <?php echo $this->session->flashdata('err'); ?>
                        </div>
                <?php } ?>
                

                    <table class="table" id="studentsTable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Giriş balı</th>
                                <th scope="col">İmtahan balı</th>
                                <th scope="col">Tesdiq</th>
                            </tr>
                            </thead>
                            <tbody> 
                            <?php foreach ($students as $students_key){?>
                                <form action="<?php echo base_url('student_point_insert'); ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash();?>" />

                    <input name="group_id" class="group_id" type="hidden" value="<?php echo $students['0']->s_group_id ?>">
                    <input name="subject_id" class="subject_id" type="hidden" value="<?php echo $subjectId; ?>">
                                <tr>
                                    <th scope="row">1</th>
                                    <td><?php echo $students_key->s_name; ?> <?php echo $students_key->s_surname; ?> <?php echo $students_key->s_patronimic; ?></td>
                                    <td><input name="student_id" class="student_id" type="hidden" value="<?php echo $students_key->c_id; ?>"></td>
                                    <td>
                                        <input name="entrance_score" class="entrance_score_<?php echo $students_key->c_id; ?>" type="text">
                                    </td>
                                    <td>
                                        <input  name="exam_score" class="exam_score_<?php echo $students_key->c_id; ?>" type="text">
                                    </td>
                                    <td>
                                        <button type="submit" data-studentId="<?php echo $students_key->c_id; ?>" class="btn btn-success sendScore">Göndər</button>
                                    </td>
                                </tr>
                                </form>
                            <?php } ?>
<<<<<<< HEAD


                        </tbody>
                    </table>
               
            </div>

        </div>
    </div>
</div>
</div>
</div>
</div>
<?php $this->load->view('admin/includes/footerStyle') ; ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
=======
=======
>>>>>>> 76d0150b9f64b5553f25f3a82b3e49f837971a77


                        </tbody>
                    </table>
               
            </div>

<<<<<<< HEAD

    </tbody>
>>>>>>> f4056484192eded866d6ef619ac442ba62e2ca1d
=======
        </div>
    </div>
</div>
</div>
</div>
</div>
<?php $this->load->view('admin/includes/footerStyle') ; ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
>>>>>>> 76d0150b9f64b5553f25f3a82b3e49f837971a77
