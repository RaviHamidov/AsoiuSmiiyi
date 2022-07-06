<?php $this->load->view('admin/includes/headerStyle'); ?>

<?php $this->load->view('admin/includes/leftMenu'); ?>

<?php $this->load->view('admin/includes/navbar'); ?>

<?php $this->load->view('admin/includes/pageName'); ?>
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">



<script type="text/javascript" src="<?php echo base_url('assets/admin/') ?>assets/scripts/jQueryScript.js"></script>

<div class="row">

    <div class="col-md-12">

        <div class="main-card mb-3 card">
            <div class="card-header">Fənn Qrup
                <div class="btn-actions-pane-right">
                    <div role="group" class="btn-group-sm btn-group">
                        <a href="<?php echo base_url('admin_create_item_re'); ?>">
                          <button class="btn btn-outline-success">Yeni</button>
                        </a>
                    </div>
                </div>
            </div>

            <?php if(empty($items)){ ?>
                <div style="margin: 20px" class="alert alert-info text-center">
                <span>Hər hansı bir məlumat tapılmadı. Məlumat daxil etmək üçün <a href="<?php echo base_url('admin_create_item_re'); ?>" style="color: green">əlavə et</a></span>
            </div>
            <?php }else{ ?>
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Qrup</th>
                            <th class="text-center">Fənn</th>
                            <th>Status</th>
                            <th class="text-center">Alətlər</th>
                        </tr>
                        </thead>
                        <tbody>

                            <?php $itemCount = 1; $for_switch=0; foreach ($items as $item){ $for_switch++; ?>
                                <tr>
                                    <td class="text-center text-muted"><?php echo $itemCount++; ?></td>
                                    <td><?php echo $item->group_no; ?></td>
                                    <td><?php echo $item->subject_name; ?></td>

          
                                    <td>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" class="toggle_Switch" id="switchbox<?php echo $for_switch; ?>" <?php echo ($item->re_status == 1) ? "checked" : ""; ?> data-toggle="toggle">
                                        </label>
                                    </td>
                                
                                    <td class="text-center">
                                        <a style="text-decoration: none;" href="<?php echo base_url('admin_detail_form_re/'.$item->re_id); ?>">
                                            <button type="button" id="PopoverCustomT-1" class="btn btn-outline-primary">Ətraflı</button>
                                        </a>

                                        <a style="text-decoration: none;" href="<?php echo base_url('admin_update_form_re/'.$item->re_id); ?>">
                                            <button class="btn-wide btn btn-outline-warning">Redaktə</button>
                                        </a>

                                            <button
                                                    data-url="<?php echo base_url('admin_deleteItem_re/'.$item->re_id); ?>"
                                                    class="mr-2 btn-icon btn-icon-only btn btn-outline-danger button_remove">
                                                    <i class="pe-7s-trash btn-icon-wrapper"> </i>
                                            </button>
                                    </td>
                                </tr>

                                <script>
                                    $(document).ready(function() {

                                        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
                                        csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
                                        $("#switchbox<?php echo $for_switch; ?>").change(function(){

                                            var post_id = <?php echo $item->re_id; ?>;
                                            var checkbox_val;
                                            if(this.checked) {
                                                checkbox_val = '1';
                                            }else{
                                                checkbox_val = '2';
                                            }
                                            
                                            var dataJson = { [csrfName]: csrfHash, post_id: post_id, checkbox_val: checkbox_val };
                                            // var dataJson = { checkbox_val: checkbox_val };

                                            $.ajax({
                                                url : "<?php echo base_url('admin_is_active_set_item_re'); ?>",
                                                type: 'post',
                                                data: dataJson,            
                                                success : function(data)
                                                {   
                                                    csrfName = data.csrfName;
                                                    csrfHash = data.csrfHash;
                                                    // console.log(data);
                                                }  
                                            });
                                        });


                                    })
                                    </script>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>
            <?php } ?>

        </div>
    </div>
</div>
</div>
</div>
</div>
<?php $this->load->view('admin/includes/footerStyle'); ?>


<script>
    $(function() {
        $('.toggle_Switch').bootstrapToggle({
            on: 'Aktiv',
            off: 'Deaktiv'
        });
    })
</script>

<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
