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
            <div class="card-header">About Create
                <div class="btn-actions-pane-right">
                    <div role="group" class="btn-group-sm btn-group">
                        <a href="<?php echo base_url('admin_item_ab_list'); ?>">
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

                <form action="<?php echo base_url('admin_create_item_ab_act'); ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash();?>" />
                    <div class="tab-content current">
                        <label for="Subject">Fənn</label>
                        <input type="text" name="subject" id="subject" class="form-control" placeholder="Dərs adını daxil edin">
                        <!-- form validation start display show -->
                        <?php if(isset($form_error)){ ?>
                            <small class="form_error_style"><?php echo form_error("subject"); ?></small>
                        <?php } ?>
                        <!-- form validation end display show -->
                        <br>

                     
                        
                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 noBlock">
                        <div class="row">
                            <label for="status">STATUS</label>
                            <select id="status" class="form-control" name="status">
                                <option value="">-Seçim edin-</option>
                                <?php foreach ($get_all_item_status as $item){ ?>
                                    <option value="<?php echo $item->i_s_id; ?>"><?php echo $item->i_s_name; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <!-- form validation start display show -->
                        <?php if(isset($form_error)){ ?>
                            <small class="form_error_style"><?php echo form_error("status"); ?></small>
                        <?php } ?>
                        <!-- form validation end display show -->
                    </div> 

                    <div class="col-xs-6 col-sm-1 col-md-1 col-lg-1 noBlock">
                        
                            <label for="syllabs">Sillabus <br><br>
                                <img width="50px" src="https://www.iphonefaq.org/files/styles/large/public/files-a.jpg">
                            </label>
                            <input hidden type="file" name="syllabs" id="syllabs" class="form-control">
                            
                    </div>

                    <div class="col-xs-6 col-sm-1 col-md-1 col-lg-1 noBlock">
                        
                            <label for="lecture">Mühazirə <br><br>
                                <img width="50px" src="https://www.iphonefaq.org/files/styles/large/public/files-a.jpg">
                            </label>
                            <input hidden type="file" name="lecture" id="lecture" class="form-control">
                            
                    </div>

                    <div class="col-xs-6 col-sm-1 col-md-1 col-lg-1 noBlock">
                        
                            <label for="exam">İmtahan sualları <br>
                                <img width="50px" src="https://www.iphonefaq.org/files/styles/large/public/files-a.jpg">
                            </label>
                            <input hidden type="file" name="exam" id="exam" class="form-control">
                            
                    </div>
                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 noBlock">
                            <button type="submit" class="btn btn-info btn-block" style="margin-top: 23px; height: 40px;">Göndər</button>
                    </div>


                </form>

            </div>

        </div>
    </div>
</div>
</div>
</div>
</div>
<?php $this->load->view('admin/includes/footerStyle') ; ?>
