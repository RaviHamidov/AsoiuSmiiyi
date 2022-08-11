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
            <div class="card-header">Rəhbər Haqqında    
                <div class="btn-actions-pane-right">
                    <div role="group" class="btn-group-sm btn-group">
                        <a href="<?php echo base_url('admin_item_ad_list'); ?>">
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


                    <br>





                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 noBlock">
                    <div>
                        <label for="taze"><b>Ad Soyad Ata adı</b></label>
                        <p><?php echo $single_item->ad_name." ".$single_item->ad_surname." ".$single_item->ad_patronimic; ?></p>

                        <br>

                        <label for="sci_level"><b>Elmi dərəcə</b></label>
                        <p><?php echo $single_item->i_c3_name; ?></p>

                        <br>

                        <label for="mail"><b>E-Mail</b></label>
                        <p><?php echo $single_item->ad_mail; ?></p>
                        <br>

                        
                        <label for="duty"><b>Vəzifə</b></label>
                        <p><?php echo $single_item->duty; ?></p>
                        <br>
                        
                        <label for="tre"><b>Haqqında</b></label>
                        <p><?php echo $single_item->ad_description; ?></p>
                        <br>

                    </div>

                   

                    

                </div>



                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 noBlock">
                    <?php if($single_item->ad_img){ ?>
                        <img width="100%" src="<?php echo base_url('upload/administrator/'.$single_item->ad_img); ?>">
                    <?php }else{ ?>
                        <img width="100%" src="<?php echo base_url('assets/admin/assets/images/no-img.png'); ?>">
                    <?php } ?>
                </div>











            </div>

        </div>
    </div>
</div>
</div>
</div>
</div>
<?php $this->load->view('admin/includes/footerStyle') ; ?>
