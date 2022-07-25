<?php $this->load->view('admin/includes/headerStyle'); ?>

<?php $this->load->view('admin/includes/leftMenu'); ?>

<?php $this->load->view('admin/includes/navbar'); ?>

<?php $this->load->view('admin/includes/pageName'); ?>
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">



<script type="text/javascript" src="<?php echo base_url('assets/admin/') ?>assets/scripts/jQueryScript.js"></script>

<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Tələbələr        
                    <?php if($this->session->flashdata('err')){ ?>
                            <div class="alert alert-danger">
                                <?php echo $this->session->flashdata('err'); ?>
                            </div>
                    <?php } ?>
            </div>    
                    <form action="<?php echo base_url('admin_student_list'); ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash();?>" />


                        <div class="col-md-12">
                            <label for="status">Qrup seçin</label>
                                <select id="status" class="form-control" name="group">
                                    <option value="">-Seçim edin-</option>
                                    <?php foreach ($get_all_item_category as $item){ ?>
                                        <option value="<?php echo $item->group_id; ?>"><?php echo $item->group_no; ?></option>
                                    <?php } ?>
                                </select>
                            <!-- form validation start display show -->
                            <!-- <?php// if(isset($form_error)){ ?>
                                <small class="form_error_style"><?php //echo form_error("group"); ?></small>
                            <?php// } ?> -->
                            <!-- form validation end display show -->
                        </div> 

                        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 noBlock">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-info btn-block" style="margin-top: 23px; height: 40px;">Göndər</button>
                            </div>
                        </div> 
                            <br><br>    
                    </form>
                </div>      
    </div>          
</div>  
                <?php $this->load->view('admin/includes/footerStyle'); ?>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
