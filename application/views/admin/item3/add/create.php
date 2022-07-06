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
            <div class="card-header">Müəllim əlavə edin
                <div class="btn-actions-pane-right">
                    <div role="group" class="btn-group-sm btn-group">
                        <a href="<?php echo base_url('admin_item_t_list'); ?>">
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

                <form action="<?php echo base_url('admin_create_item_t_act'); ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash();?>" />

                    <div id="aze" class="tab-content current">
                        <label for="tname">Ad</label>
                        <input type="text" name="t_name" id="t_name" class="form-control" placeholder="Adı daxil edin">
                        <!-- form validation start display show -->
                        <?php if(isset($form_error)){ ?>
                            <small class="form_error_style"><?php echo form_error("t_name"); ?></small>
                        <?php } ?>
                        <!-- form validation end display show -->
                        <br>

                        <label for="tsurname">Soyad</label>
                        <input type="text" name="t_surname" id="t_surname" class="form-control" placeholder="Soyadı daxil edin">
                        <!-- form validation start display show -->
                        <?php if(isset($form_error)){ ?>
                            <small class="form_error_style"><?php echo form_error("t_surname"); ?></small>
                        <?php } ?>
                        <!-- form validation end display show -->
                        <br>

                        <label for="t_patronimic">Ata adı</label>
                        <input type="text" name="t_patronimic" id="t_patronimic" class="form-control" placeholder="Ata adını daxil edin">
                        <!-- form validation start display show -->
                        <?php if(isset($form_error)){ ?>
                            <small class="form_error_style"><?php echo form_error("t_patronimic"); ?></small>
                        <?php } ?>
                        <!-- form validation end display show -->
                        <br>
                        
                        <label for="email">E-Mail</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="E-Mail daxil edin">
                        <!-- form validation start display show -->
                        <?php if(isset($form_error)){ ?>
                            <small class="form_error_style"><?php echo form_error("email"); ?></small>
                        <?php } ?>
                        <!-- form validation end display show -->
                        <br>
                        

                        <label for="experience">Tərübə</label>
                        <textarea name="experience" rows="10" cols="50" id="daze" class="ckeditor"></textarea>
                        <br>

                        <label for="language">Dil bilikləri</label>
                        <textarea name="language" rows="10" cols="50" id="drus" class="ckeditor"></textarea>
                        <br>

                        <label for="skills">İxtisas üzrə bacarıqlar</label>
                        <textarea name="skills" rows="10" cols="50" id="deng" class="ckeditor"></textarea>
                        <br>

                    </div>
                   
                   <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 noBlock">
                        <div class="row">
                            <label for="date">Doğum tarixi</label>
                            <input type="date" name="date" id="date" class="form-control">
                            <!-- form validation start display show -->
                            <?php if(isset($form_error)){ ?>
                                <small class="form_error_style"><?php echo form_error("date"); ?></small>
                            <?php } ?>
                            <!-- form validation end display show -->
                        </div>
                    </div> 


                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 noBlock">
                        
                            <label for="t_sicentific">Elmi Dərəcə</label>
                            <select id="cate" class="form-control" name="t_sicentific">
                                <option value="">-Seçim edin-</option>

                                <?php foreach ($get_all_item_category as $item){ ?>
                                    <option value="<?php echo $item->i_c3_id; ?>"><?php echo $item->i_c3_name; ?></option>
                                <?php } ?>

                            </select>
                        <!-- form validation start display show -->
                        <?php if(isset($form_error)){ ?>
                            <small class="form_error_style"><?php echo form_error("t_sicentific"); ?></small>
                        <?php } ?>
                        <!-- form validation end display show -->
                    </div> 
                        
                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 noBlock">
                        <div class="row">
                            <label for="status">Status</label>
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

                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 noBlock">
                            <label for="t_speciality">İxtisas</label>
                            <select id="cate" class="form-control" name="t_speciality">
                                <option value="">-Seçim edin-</option>
                                <?php foreach ($get_all_item_speciality as $items){ ?>
                                    <option value="<?php echo $items->speciality_id; ?>"><?php echo $items->speciality_name; ?></option>
                                <?php } ?>
                            </select>
                        <!-- form validation start display show -->
                        <?php if(isset($form_error)){ ?>
                            <small class="form_error_style"><?php echo form_error("speciality"); ?></small>
                        <?php } ?>
                        <!-- form validation end display show -->
                    </div> 

                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 noBlock">
                        
                            <label for="img">Profil şəkli <br>
                                <img width="50px" src="https://www.iphonefaq.org/files/styles/large/public/files-a.jpg">
                            </label>
                            <input hidden type="file" name="user_file" id="img" class="form-control">
                            <br>
                    </div>
                    <br>
                    
                    <div>
                        <br>
                        <br>
                        <br>    
                    <label for="facebook">Facebook</label>
                        <input type="text" name="facebook" id="facebook" class="form-control" placeholder="Facebook ünvanını daxil edin">
                        <br>

                    <label for="linkedin">Linkedin</label>
                        <input type="text" name="linkedin" id="linkedin" class="form-control" placeholder="Linkedin ünvanını daxil edin">
                        <br>
                    
                    <label for="twitter">Twitter</label>
                        <input type="text" name="twitter" id="twitter" class="form-control" placeholder="Twitter ünvanını daxil edin">
                        <br>
                         
                    <label for="phone">Telefon</label>
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Telefonu daxil edin">
                        <br>

                    </div>
                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 noBlock">
                        <div class="row">

                            <button type="submit" class="btn btn-info btn-block" style="margin-top: 23px; height: 40px;">SEND</button>
                        </div>
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
