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

                    
                <?php if($this->session->flashdata('success')){ ?>
                        <div class="alert alert-success">
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                <?php } ?>
                   


               
   
                    <h1>Qiymet cedveli</h1>
                    
                    <table class='table table-hover table-striped'>
                        <tr>
                            <th>A.S.A</th>
                            <th>Giriş balı</th>
                            <th>İmtahan balı</th>
                           
                        </tr>
                       
                        <?php foreach($group as $group_key){ ?>
                            <tr>
                                <form action="<?php echo base_url('admin_point_update/'.$group_key['c_id']); ?>" method="POST">
                                <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash();?>" />
                                    <td><?php echo $group_key['s_name']; ?> <?php echo $group_key['s_surname']; ?> <?php echo $group_key['s_patronimic']; ?></td>
                                    <td><input type="text" class="form-control" name="point_enter" placeholder="Giriş balı"></td>
                                    <td><input type="text" class="form-control" name="point_out" placeholder="İmtahan balı"></td>
                                    <input type="text" name="subject_id" value="<?php echo $subject_id; ?>" hidden>
                                    <td>        
                                        <button type="submit" class="btn btn-success">Təsdiq</button> 
                                    </td>
                                    
                                </form> 
                            </tr>
                        <?php }  ?>
                        
                        
                        
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

