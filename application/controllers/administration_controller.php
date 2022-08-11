<?php

class administration_controller extends CI_Controller{

    public $rootFolder = "";
    public $viewFolder = "";
    public $subViewFolder = "";

    public function __construct()
    {
        parent::__construct();
        $this->rootFolder = "admin";
        $this->viewFolder = "administrator";
//        $this->subViewFolder = "add";

        $this->load->model("Administratorius_model");
    }

    public function index(){
        $viewData = new stdClass();


        $items = $this->Administratorius_model->get_all();

        $viewData->rootFolder = $this->rootFolder;
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "list";

        $viewData->items = $items;

        $this->load->view("{$viewData->rootFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/list",$viewData);
    }


    public function createItem(){
        $viewData = new stdClass();

        $get_all_item_category = $this->Administratorius_model->get_all_item_category();
        $get_all_item_status   = $this->Administratorius_model->get_all_item_status();
        $viewData->get_all_item_category = $get_all_item_category;
        $viewData->get_all_item_status   = $get_all_item_status;
        $viewData->rootFolder = $this->rootFolder;
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "add";

        $this->load->view("{$viewData->rootFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/create",$viewData);
    }

    public function createItemAct(){

        $this->form_validation->set_rules("t_name", "Ad", "required|trim");
        $this->form_validation->set_rules("t_surname", "Soyad", "required|trim");
        $this->form_validation->set_rules("email", "E-Mail", "required|trim");

        $this->form_validation->set_message(
            array(
                'required' => "<b>{field}</b> xanası doldurulmalıdır!",
                'trim'     => "<b>{field}</b> xanasında boşluq daxil etməyin!",
            )
        );

        $validate = $this->form_validation->run();

        if($validate){
            $ad_name             = $_POST['t_name'];
            $ad_surname          = $_POST['t_surname'];          
            $ad_patronimic       = $_POST['t_patronimic'];

            $ad_sicentific       = $_POST['t_sicentific'];

            $ad_email            = $_POST['email'];
            $description         = $_POST['description'];

            $duty                = $_POST['duty'];
            $status              = $_POST['status'];

            $config['upload_path']      = 'upload/administrator/';
            $config['allowed_types']    = 'gif|jpg|png|pdf|jpeg';
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
                'ad_img'                 => $img_name,
                'ad_name'                => $ad_name,
                'ad_surname'             => $ad_surname,
                'ad_patronimic'          => $ad_patronimic,
                'ad_scientific_level_id' => $ad_sicentific,
                'ad_mail'                => $ad_email,
                'ad_description'         => $description,
                'duty'                   => $duty,
                'status'                 => $status
            ];

            $data = $this->security->xss_clean($data);

            if(isset($_SESSION['admin_id']) && isset($_SESSION['admin_status']) && isset($_SESSION['admin_category'])){

                $this->Administratorius_model->add($data);

                redirect(base_url('admin_item_ad_list'));

            }else{
                redirect(base_url('admin_login'));
                exit();
            }


        }else{
            $viewData = new stdClass();

            $get_all_item_category = $this->Administratorius_model->get_all_item_category();
            $get_all_item_status   = $this->Administratorius_model->get_all_item_status(); 
            $viewData->get_all_item_category     = $get_all_item_category;
            $viewData->get_all_item_status       = $get_all_item_status; 

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
        $item = $this->Administratorius_model->get_single(
            array("ad_id" => $id)
        );

        $get_all_item_category = $this->Administratorius_model->get_all_item_category();
        $get_all_item_status   = $this->Administratorius_model->get_all_item_status(); 
        $viewData->get_all_item_category = $get_all_item_category;
        $viewData->get_all_item_status   = $get_all_item_status; 
        $viewData->single_item   = $item;

        $viewData->rootFolder = $this->rootFolder;
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "update";

        $this->load->view("{$viewData->rootFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/create",$viewData);
    }

    public function updateItemAct($id){

        $this->form_validation->set_rules("t_name", "Ad", "required|trim");
        $this->form_validation->set_rules("t_surname", "Soyad", "required|trim");
        $this->form_validation->set_rules("email", "E-Mail", "required|trim");

        $this->form_validation->set_message(
            array(
                'required' => "<b>{field}</b> xanası doldurulmalıdır!",
                'trim'     => "<b>{field}</b> xanasında boşluq daxil etməyin!",
            )
        );

        $validate = $this->form_validation->run();

        if($validate){
            
            $ad_name             = $_POST['t_name'];
            $ad_surname          = $_POST['t_surname'];          
            $ad_patronimic       = $_POST['t_patronimic'];

            $ad_sicentific       = $_POST['t_sicentific'];

            $ad_email            = $_POST['email'];
            $ad_description      = $_POST['description'];
            $duty                = $_POST['duty'];
            $status              = $_POST['status'];

            $config['upload_path']      = 'upload/administrator/';
            $config['allowed_types']    = 'gif|jpg|png|pdf|jpeg';
            $config['encrypt_name']     = true;

            $data_id = [
                "ad_id" =>$id,
            ];
            

            $this->load->library('upload', $config);

            $this->upload->initialize($config);

            if ($this->upload->do_upload('user_file')){
                $data     = $this->upload->data('file_name');
                $img_name = $data;
            }else{
                $get_current_img = $this->Administratorius_model->get_single(
                    array("ad_id" => $id)
                );

                $img_name = $get_current_img->ad_img;
            }

            $data = [
                'ad_img'                 => $img_name,
                'ad_name'                => $ad_name,
                'ad_surname'             => $ad_surname,
                'ad_patronimic'          => $ad_patronimic,
                'ad_scientific_level_id' => $ad_sicentific,
                'ad_mail'                => $ad_email,
                'ad_description'         => $ad_description,
                'duty'                   => $duty,
                'status'                 => $status
            ];

            $data = $this->security->xss_clean($data);


            if(isset($_SESSION['admin_id']) && isset($_SESSION['admin_status']) && isset($_SESSION['admin_category'])){

                $this->Administratorius_model->update($data_id, $data);
                redirect(base_url('admin_item_ad_list'));

            }else{
                redirect(base_url('admin_login'));
                exit();
            }


        }else{
            $viewData = new stdClass();

            // get single item
            $item = $this->Administratorius_model->get_single(
                array("ad_id" => $id)
            );

            $get_all_item_category = $this->Administratorius_model->get_all_item_category();
            $get_all_item_status   = $this->Administratorius_model->get_all_item_status(); 
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

            $this->Administratorius_model->delete(array("ad_id" => $id,));
            redirect(base_url('admin_item_ad_list'));

        }else{
            redirect(base_url('admin_login'));
            exit();
        }

    }

    public function detail_form($id){

        $viewData = new stdClass();

        $item = $this->Administratorius_model->get_single(
            array("ad_id" => $id)
        );

//        $get_all_item_category = $this->Administratorius_model->get_all_item_category();
//        $get_all_item_status   = $this->Administratorius_model->get_all_item_status();
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

            $this->Administratorius_model->update(array("ad_id" => $post_id,), array("t_status" => $response['checkbox_val']));

            echo json_encode($response);

            // if($id){

            //     $isActive = ($this->input->post("id") === "true") ? 1 : 0;

            //     echo gettype($isActive);

            //     // $token = ($this->input->post("token"));
            //     // echo gettype($token);
            //     $this->item_model->update(array("id" => $id,), array("status" => $isActive,));

            // }else{
            //     redirect(base_url('admin_login'));
            //     exit();
            // }

        }else{
            redirect(base_url('admin_login'));
            exit();
        }
    }


}