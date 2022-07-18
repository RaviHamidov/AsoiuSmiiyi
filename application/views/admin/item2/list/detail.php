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
            <div class="card-header">Event Detail
                <div class="btn-actions-pane-right">
                    <div role="group" class="btn-group-sm btn-group">
                        <a href="<?php echo base_url('admin_item_c_list'); ?>">
                            <button class="btn btn-info">Geri</button>
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


                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 noBlock">
                    <div id="aze" class="tab-content current">
                        <label for="taze"><b>Ad Soyad Ata adı</b></label>
                        <p><?php echo $single_item->s_name." ".$single_item->s_surname." ".$single_item->s_patronimic; ?></p>

                        <br>

                        <label for="daze"><b>E-Mail</b></label>
                        <p><?php echo $single_item->s_email; ?></p>

                        <br>
                        <label for="teng"><b>Telefon nömrəsi</b></label>
                        <p><?php echo $single_item->s_phone; ?></p>
                        <br>

                        <label for="trus"><b>Ixtisas</b></label>
                        <p><?php echo $single_item->speciality_name; ?></p>
                        <br>

                        <label for="deng"><b>Qrup nömrəsi</b></label>
                        <p><?php echo $single_item->group_no; ?></p>
                        <br>
                      <label for="status"><b>STATUS</b></label>
                        <p><?php echo $single_item->i_s_name; ?></p>
                    </div>
                </div>


            </div>

        </div>
    </div>
</div>
</div>
</div>
</div>
<?php $this->load->view('admin/includes/footerStyle') ; ?>
