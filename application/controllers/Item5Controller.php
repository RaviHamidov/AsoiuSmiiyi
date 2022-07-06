<?php

class Item5Controller extends CI_Controller{

    public $rootFolder = "";
    public $viewFolder = "";
    public $subViewFolder = "";

    public function __construct()
    {
        parent::__construct();
        $this->rootFolder = "admin";
        $this->viewFolder = "item5";

        $this->load->model("item5_model");
    }

    public function index(){
        $viewData = new stdClass();


        $items = $this->item5_model->get_all();
        $get_all_item_subjects = $this->item5_model->get_all_item_subjects();
        $get_all_item_groups = $this->item5_model->get_all_item_groups();
        $get_all_item_status   = $this->item5_model->get_all_item_status();
        $viewData->get_all_item_groups = $get_all_item_groups;
        $viewData->get_all_item_subjects   = $get_all_item_subjects;
        $viewData->get_all_item_status   = $get_all_item_status;
        $viewData->rootFolder = $this->rootFolder;
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "list";

        $viewData->items = $items;

        $this->load->view("{$viewData->rootFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/list",$viewData);
    }

    public function createItem(){
        $viewData = new stdClass();

        $get_all_item_subjects = $this->item5_model->get_all_item_subjects();
        $get_all_item_groups = $this->item5_model->get_all_item_groups();
        $get_all_item_status   = $this->item5_model->get_all_item_status();
        $viewData->get_all_item_groups = $get_all_item_groups;
        $viewData->get_all_item_subjects   = $get_all_item_subjects;
        $viewData->get_all_item_status   = $get_all_item_status;

        $viewData->rootFolder = $this->rootFolder;
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "add";

        $this->load->view("{$viewData->rootFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/create",$viewData);
    }

    public function createItemAct(){

        $this->form_validation->set_rules("group", "Qrup nömrəsi", "required|trim");
        $this->form_validation->set_rules("subject", "Fənn adı", "required|trim");
        $this->form_validation->set_rules("status", "Status", "required|trim");

        $this->form_validation->set_message(
            array(
                'required' => "<b>{field}</b> xanası doldurulmalıdır!",
                'trim'     => "<b>{field}</b> xanasında boşluq daxil etməyin!",
            )
        );

        $validate = $this->form_validation->run();

        if($validate){
            $group          = $_POST['group'];
            $subject        = $_POST['subject'];
            $status         = $_POST['status'];

            

            $data = [
                'co_group_no'          => $group,
                'co_subject_id'        => $subject,
                'co_status'            => $status,
            ];

            $data = $this->security->xss_clean($data);

            if(isset($_SESSION['admin_id']) && isset($_SESSION['admin_status']) && isset($_SESSION['admin_category'])){

                $this->item5_model->add($data);

                redirect(base_url('admin_item_co_list'));

            }else{
                redirect(base_url('admin_login'));
                exit();
            }


        }else{
            $viewData = new stdClass();
            $get_all_item_subjects = $this->item5_model->get_all_item_subjects();
            $get_all_item_groups = $this->item5_model->get_all_item_groups();
            $get_all_item_status   = $this->item5_model->get_all_item_status();
            $viewData->get_all_item_groups = $get_all_item_groups;
            $viewData->get_all_item_subjects   = $get_all_item_subjects;
            $viewData->get_all_item_status   = $get_all_item_status;
    
            $viewData->rootFolder = $this->rootFolder;
            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "add";

            $this->load->view("{$viewData->rootFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/create",$viewData);

        }


    }

    public function update_form($id){

        $viewData = new stdClass();

        // get single item
        $item = $this->item5_model->get_single(
            array("co_id" => $id)
        );

        $get_all_item_subjects = $this->item5_model->get_all_item_subjects();
        $get_all_item_groups = $this->item5_model->get_all_item_groups();
        $get_all_item_status   = $this->item5_model->get_all_item_status();
        $viewData->get_all_item_groups = $get_all_item_groups;
        $viewData->get_all_item_subjects   = $get_all_item_subjects;
        $viewData->get_all_item_status   = $get_all_item_status;

        $viewData->single_item   = $item;



        $viewData->rootFolder = $this->rootFolder;
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "update";

        $this->load->view("{$viewData->rootFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/create",$viewData);
    }

    public function updateItemAct($id){

        $this->form_validation->set_rules("group", "Qrup nömrəsi", "required|trim");
        $this->form_validation->set_rules("subject", "Fənn adı", "required|trim");
        $this->form_validation->set_rules("status", "Status", "required|trim");
        $this->form_validation->set_message(
            array(
                'required' => "<b>{field}</b> xanası doldurulmalıdır!",
                'trim'     => "<b>{field}</b> xanasında boşluq daxil etməyin!",
            )
        );

        $validate = $this->form_validation->run();

        if($validate){
            
            $group          = $_POST['group'];
            $subject        = $_POST['subject'];
            $status         = $_POST['status'];

            

            $data_id = [
                "co_id" =>$id,
            ];


            $data = [
                'co_group_no'          => $group,
                'co_subject_id'        => $subject,
                'co_status'            => $status,
            ];

            $data = $this->security->xss_clean($data);

            if(isset($_SESSION['admin_id']) && isset($_SESSION['admin_status']) && isset($_SESSION['admin_category'])){

                $this->item5_model->update($data_id, $data);
                redirect(base_url('admin_item_co_list'));

            }else{
                redirect(base_url('admin_login'));
                exit();
            }


        }else{
            $viewData = new stdClass();

            // get single item
            $item = $this->item5_model->get_single(
                array("co_id" => $id)
            );
            $get_all_item_subjects = $this->item5_model->get_all_item_subjects();
            $get_all_item_groups = $this->item5_model->get_all_item_groups();
            $get_all_item_status   = $this->item5_model->get_all_item_status();
            $viewData->get_all_item_groups = $get_all_item_groups;
            $viewData->get_all_item_subjects   = $get_all_item_subjects;
            $viewData->get_all_item_status   = $get_all_item_status;

            $viewData->rootFolder = $this->rootFolder;
            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "update";
            $viewData->form_error = true; //Start form validation variable "set"

            $viewData->single_item   = $item;

            $this->load->view("{$viewData->rootFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/create",$viewData);

        }

    }

    public function delete($id)
    {

        if(isset($_SESSION['admin_id']) && isset($_SESSION['admin_status']) && isset($_SESSION['admin_category'])){

            $this->item5_model->delete(array("co_id" => $id,));
            redirect(base_url('admin_item_co_list'));

        }else{
            redirect(base_url('admin_login'));
            exit();
        }

    }

    public function detail_form($id){

        $viewData = new stdClass();

        $item = $this->item5_model->get_single(
            array("co_id" => $id)
        );

//        $get_all_item_category = $this->item5_model->get_all_item_category();
//        $get_all_item_status   = $this->item5_model->get_all_item_status();
//        $viewData->get_all_item_category = $get_all_item_category;
//        $viewData->get_all_item_status   = $get_all_item_status;

        $viewData->single_item   = $item;

        $viewData->rootFolder = $this->rootFolder;
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "list";

        $this->load->view("{$viewData->rootFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/detail",$viewData);
    }

    public function isActiveSet(){
        if(isset($_SESSION['admin_id']) && isset($_SESSION['admin_status']) && isset($_SESSION['admin_category'])){

            $response = array(
                'csrfName' => $this->security->get_csrf_token_name(),
                'csrfHash' => $this->security->get_csrf_hash()
            );

            $response['checkbox_val'] = $_POST['checkbox_val'];
            $post_id = $_POST['post_id'];

            $response['checkbox_val'] = $this->security->xss_clean($response['checkbox_val']);
            $post_id = $this->security->xss_clean($post_id);

            $this->item5_model->update(array("co_id" => $post_id,), array("co_status" => $response['checkbox_val']));

            echo json_encode($response);

        }else{
            redirect(base_url('admin_login'));
            exit();
        }
    }


}