<?php

class Item7Controller extends CI_Controller{

    public $rootFolder = "";
    public $viewFolder = "";
    public $subViewFolder = "";

    public function __construct()
    {
        parent::__construct();
        $this->rootFolder = "admin";
        $this->viewFolder = "item7";

        $this->load->model("item7_model");
    }

    public function index(){
        $viewData = new stdClass();


        $items = $this->item7_model->get_all();

        $viewData->rootFolder = $this->rootFolder;
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "list";

        $viewData->items = $items;

        $this->load->view("{$viewData->rootFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/list",$viewData);
    }

    public function createItem(){
        $viewData = new stdClass();

        $get_all_item_category = $this->item7_model->get_all_item_category();
        $get_all_item_status   = $this->item7_model->get_all_item_status();
        $viewData->get_all_item_category = $get_all_item_category;
        $viewData->get_all_item_status   = $get_all_item_status;

        $viewData->rootFolder = $this->rootFolder;
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "add";

        $this->load->view("{$viewData->rootFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/create",$viewData);
    }

    public function createItemAct(){

        $this->form_validation->set_rules("group", "Qrup nömrəsi", "required|trim");
        $this->form_validation->set_rules("status", "Status", "required|trim");

        $this->form_validation->set_message(
            array(
                'required' => "<b>{field}</b> xanası doldurulmalıdır!",
                'trim'     => "<b>{field}</b> xanasında boşluq daxil etməyin!",
            )
        );

        $validate = $this->form_validation->run();

        if($validate){
            $group    = $_POST['group'];
            $status   = $_POST['status'];

            $config['upload_path']      = 'upload/trainings/';
            $config['allowed_types']    = 'gif|jpg|png|pdf|jpeg|doc|docx|pdf';
            $config['encrypt_name']     = true;

            $this->load->library('upload', $config);

            $this->upload->initialize($config);

            if ($this->upload->do_upload('user_file')){
                $data     = $this->upload->data('file_name');

                $img_name = $data;
            }else{

                $img_name = '';
            }

            $data = [
                'tr_group_id'       => $group,
                'tr_url'            => $img_name,
                'tr_status'         => $status,
            ];

            $data = $this->security->xss_clean($data);


            if(isset($_SESSION['admin_id']) && isset($_SESSION['admin_status']) && isset($_SESSION['admin_category'])){

                $this->item7_model->add($data);

                redirect(base_url('admin_item_tr_list'));

            }else{
                redirect(base_url('admin_login'));
                exit();
            }


        }else{
            $viewData = new stdClass();

            $get_all_item_category = $this->item7_model->get_all_item_category();
            $get_all_item_status   = $this->item7_model->get_all_item_status();
            $viewData->get_all_item_category = $get_all_item_category;
            $viewData->get_all_item_status   = $get_all_item_status;

            $viewData->rootFolder = $this->rootFolder;
            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "add";
            $viewData->form_error = true; //Start form validation variable "set"

            $this->load->view("{$viewData->rootFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/create",$viewData);

        }


    }

    public function update_form($id){

        $viewData = new stdClass();

        // get single item
        $item = $this->item7_model->get_single(
            array("tr_id" => $id)
        );

        $get_all_item_category = $this->item7_model->get_all_item_category();
        $get_all_item_status   = $this->item7_model->get_all_item_status();
        $viewData->get_all_item_category = $get_all_item_category;
        $viewData->get_all_item_status   = $get_all_item_status;

        $viewData->single_item   = $item;



        $viewData->rootFolder = $this->rootFolder;
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "update";

        $this->load->view("{$viewData->rootFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/create",$viewData);
    }

    public function updateItemAct($id){

        $this->form_validation->set_rules("group", "Qrup nömrəsi", "required|trim");
        $this->form_validation->set_rules("status", "Status", "required|trim");


        $this->form_validation->set_message(
            array(
                'required' => "<b>{field}</b> xanası doldurulmalıdır!",
                'trim'     => "<b>{field}</b> xanasında boşluq daxil etməyin!",
            )
        );

        $validate = $this->form_validation->run();

        if($validate){
            

            $group    = $_POST['group'];
            $status   = $_POST['status'];

            $config['upload_path']      = 'upload/trainings/';
            $config['allowed_types']    = 'gif|jpg|png|pdf|jpeg|doc|docx|pdf';
            $config['encrypt_name']     = true;


            $data_id = [
                "tr_id" =>$id,
            ];


            $this->load->library('upload', $config);

            $this->upload->initialize($config);

            if ($this->upload->do_upload('user_file')){
                $data     = $this->upload->data('file_name');
                $data_ext = $this->upload->data('file_ext');

                $img_name = $data;
            }else{

                $get_current_img = $this->item7_model->get_single(
                    array("tr_id" => $id)
                );

                $img_name = $get_current_img->tr_img;
            }

            $data = [
                'tr_group_id'       => $group,
                'tr_url'            => $img_name,
                'tr_status'         => $status,
            ];

            $data = $this->security->xss_clean($data);

            if(isset($_SESSION['admin_id']) && isset($_SESSION['admin_status']) && isset($_SESSION['admin_category'])){

                $this->item7_model->update($data_id, $data);
                redirect(base_url('admin_item_tr_list'));

            }else{
                redirect(base_url('admin_login'));
                exit();
            }


        }else{
            $viewData = new stdClass();

            // get single item
            $item = $this->item7_model->get_single(
                array("tr_id" => $id)
            );

            $get_all_item_category = $this->item7_model->get_all_item_category();
            $get_all_item_status   = $this->item7_model->get_all_item_status();
            $viewData->get_all_item_category = $get_all_item_category;
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

            $this->item7_model->delete(array("tr_id" => $id,));
            redirect(base_url('admin_item_tr_list'));

        }else{
            redirect(base_url('admin_login'));
            exit();
        }

    }

    public function detail_form($id){

        $viewData = new stdClass();

        $item = $this->item7_model->get_single(
            array("tr_id" => $id)
        );

//        $get_all_item_category = $this->item7_model->get_all_item_category();
//        $get_all_item_status   = $this->item7_model->get_all_item_status();
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

            $this->item7_model->update(array("tr_id" => $post_id,), array("tr_status" => $response['checkbox_val']));

            echo json_encode($response);

        }else{
            redirect(base_url('admin_login'));
            exit();
        }
    }


}