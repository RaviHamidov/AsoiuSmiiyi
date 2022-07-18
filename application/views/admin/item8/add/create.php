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
                        <a href="<?php echo base_url('admin_item_ce_list'); ?>">
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

                    <form action="<?php  echo base_url('selectStudents'); ?>" method="post">
                        <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash();?>" />
                        <label for="qr">Qrup</label>
                            <select name="group" id="group_id" class="form-control">
                                <option value="">-Seçim edin-</option>
                                <?php foreach($get_all_item_group as $get_all_item_group_key){ ?>
                                    <option value="<?php echo $get_all_item_group_key->group_id ; ?>"><?php echo $get_all_item_group_key->group_no; ?></option>
                                <?php } ?>
                            </select>
                            <br>

                            <label for="qr">Fənn</label>
                            <select name="subject" id="subject_id" class="form-control">
                                <option value="">-Seçim edin-</option>
                                <?php foreach($get_all_item_category as $get_all_item_subjects_key){ ?>
                                    <option value="<?php echo $get_all_item_subjects_key->ab_id ; ?>"><?php echo $get_all_item_subjects_key->subject_name; ?></option>
                                <?php } ?>
                            </select>
                            <br>

<!--                        <button type="submit" class="btn btn-primary">Təsdiq et</button>-->
                            
                    </form>
                <br>
                <br>
                <br>
                <table class="table" id="studentsTable">
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

<script>
    $("#group_id").on("change",function (){
        var groupId = $(this).val();
        if (groupId != ""){
            $.ajax({
                type:"GET",
                url:"<?php  echo base_url('selectStudents/'); ?>"+groupId,
                success:function(res){
                    $("#studentsTable").html("").append(res)
                }
            })
        } else {
            $("#studentsTable").html("");
        }
    });

    $(document).on('click',".sendScore",function (){
        var studentId = $(this).attr('data-studentId');
        // console.log(studentId);
        var entrance_score = $(document).find('.entrance_score_'+studentId).val();
        var exam_score = $(document).find('.exam_score_'+studentId).val();

        var subject = $(document).find('#subject_id').val();
        var group_id = $(document).find('#group_id').val();
        
        // console.log(studentId,entrance_score,exam_score,subject)
       var dataString = {'studentId' :studentId, 'entrance_score':entrance_score, 'exam_score':exam_score,'subject':subject, 'group_id':group_id};
       $.ajax({
				url: "<?php echo base_url("point_inserting");?>",
				type: "POST",
				data: dataString,
				cache: false,
				success:function(res){
                    // console.log(res);
                }
			});

        // $data = [
        //     'po_student_id' => $studentId,
        //     // 'po_group_id'   => $,
        //     'po_subject_id' => $subject,
        //     'po_enter_point'=> $entrance_score,
        //     'po_exam_point' => $exam_score

        // ];
        // $this->db->insert('point',$data);



    })
    //$('#sub_btn').on('click', function(){
    //
    //    var s_goroup_id = $('#group_id').val()
    //
    //
    //
    //    $.ajax({
    //        type:"POST",
    //        url:"<?php //// echo base_url('selectStudents'); ?>//",
    //        data:{
    //            s_goroup_id : s_goroup_id,
    //        },
    //        success:function(res){
    //            console.log(res);
    //            if(res == "success"){
    //
    //            }
    //        }
    //    })
    //
    //})
</script>