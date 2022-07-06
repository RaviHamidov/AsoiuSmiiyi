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
            <div class="card-header">Slider Detail
                <div class="btn-actions-pane-right">
                    <div role="group" class="btn-group-sm btn-group">
                        <a href="<?php echo base_url('admin_item_sl_list'); ?>">
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


                     <ul class="tabs">
                        <li class="tab-link current" data-tab="aze">Az</li>
                        <li class="tab-link" data-tab="eng">En</li>
                        <li class="tab-link" data-tab="rus">Ru</li>
                        <li class="tab-link" data-tab="tur">Tr</li>
                    </ul>
                    <br>





                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 noBlock">
                    <div id="aze" class="tab-content current">
                        <label for="taze"><b>TITLE AZ</b></label>
                        <p><?php echo $single_item->sl_title; ?></p>

                        <br>

                        <label for="daze"><b>DESCRIPTION AZ</b></label>
                        <p><?php echo $single_item->sl_description; ?></p>

                        <br>
                    </div>
                    <div id="eng" class="tab-content">
                        <label for="teng"><b>TITLE EN</b></label>
                        <p><?php echo $single_item->sl_title_en; ?></p>
                        <br>

                        <label for="deng"><b>DESCRIPTION EN</b></label>
                        <p><?php echo $single_item->sl_description_en; ?></p>
                        <br>
                    </div>
                    <div id="rus" class="tab-content">
                        <label for="trus"><b>TITLE RU</b></label>
                        <p><?php echo $single_item->sl_title_ru; ?></p>
                        <br>

                        <label for="drus"><b>DESCRIPTION RU</b></label>
                        <p><?php echo $single_item->sl_description_ru; ?></p>
                        <br>
                    </div>
                    <div id="tur" class="tab-content">
                        <label for="ttre"><b>TITLE TR</b></label>
                        <p><?php echo $single_item->sl_title_tr; ?></p>
                        <br>

                        <label for="dtur"><b>DESCRIPTION TR</b></label>
                        <p><?php echo $single_item->sl_description_tr; ?></p>
                        <br>
                    </div>






                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 noBlock" style="padding: 0px">
                        <label for="date"><b>DATE</b></label>
                        <p><?php echo date("d-m-Y", strtotime($single_item->sl_date)); ?></p>
                    </div>

                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 noBlock">
                        <label for="status"><b>STATUS</b></label>
                        <p><?php echo $single_item->i_s_name; ?></p>
                    </div>

                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 noBlock">
                        <label for="cate"><b>CATEGORY</b></label>
                        <p><?php echo $single_item->i_c6_name; ?></p>
                    </div>


                </div>



                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 noBlock">
                    <?php if($single_item->sl_img){ ?>
                        <img width="100%" src="<?php echo base_url('upload/slider/'.$single_item->sl_img); ?>">
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
