<?php

class Item2Controller extends CI_Controller{

    public $rootFolder = "";
    public $viewFolder = "";
    public $subViewFolder = "";

    public function __construct()
    {
        parent::__construct();
        $this->rootFolder = "admin";
        $this->viewFolder = "item2";
//        $this->subViewFolder = "add";

        $this->load->model("item2_model");
    }

    public function index(){

        $viewData = new stdClass();


        $get_all_item_category = $this->item2_model->get_all_item_category();

        $viewData->rootFolder = $this->rootFolder;
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "list";

        $viewData->get_all_item_category = $get_all_item_category;

        $this->load->view("{$viewData->rootFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/list",$viewData);
    }
    public function get_students(){
        

       $this->form_validation->set_rules("group", "Qrup nömrəsi", "required|trim");

        $this->form_validation->set_message(
            array(
                'required' => "<b>{field}</b> xanası doldurulmalıdır!",
                'trim'     => "<b>{field}</b> xanasında boşluq daxil etməyin!",
            )
        );

        $validate = $this->form_validation->run();

        if($validate){

        $g_id = $_POST['group'];
        // print_r("<pre>");
        // print_r($g_id);
        // die;
        $viewData = new stdClass();

        $items = $this->item2_model->get_all($g_id);

        $viewData->rootFolder = $this->rootFolder;
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "list";

        $viewData->items = $items;

        $this->load->view("{$viewData->rootFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/stdlist",$viewData);

        }else{
            $viewData = new stdClass();

            $get_all_item_category = $this->item2_model->get_all_item_category();
            $get_all_item_status   = $this->item2_model->get_all_item_status();
            $get_all_item_speciality   = $this->item2_model->get_all_item_speciality();
            $viewData->get_all_item_category = $get_all_item_category;
            $viewData->get_all_item_status   = $get_all_item_status;
            $viewData->get_all_item_speciality = $get_all_item_speciality;

            $viewData->rootFolder = $this->rootFolder;
            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "add";
            $viewData->form_error = true; //Start form validation variable "set"

            $this->load->view("{$viewData->rootFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/create",$viewData);

        }


        
    }


    public function createItem(){
        $viewData = new stdClass();

        $get_all_item_category = $this->item2_model->get_all_item_category();
        $get_all_item_status   = $this->item2_model->get_all_item_status();
        $get_all_item_speciality   = $this->item2_model->get_all_item_speciality();
        $viewData->get_all_item_category = $get_all_item_category;
        $viewData->get_all_item_status   = $get_all_item_status;
        $viewData->get_all_item_speciality   = $get_all_item_speciality;

        $viewData->rootFolder = $this->rootFolder;
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "add";

        $this->load->view("{$viewData->rootFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/create",$viewData);
    }

    public function createItemAct(){

        $this->form_validation->set_rules("s_name", "Ad", "required|trim");
        $this->form_validation->set_rules("s_surname", "Soyad", "required|trim");
        $this->form_validation->set_rules("s_patronimic", "Ata adı", "required|trim");
        $this->form_validation->set_rules("category", "Qrup nömrəsi", "required|trim");
        $this->form_validation->set_rules("s_email", "E-Mail", "required|trim");
        $this->form_validation->set_rules("speciality", "İxtisas", "required|trim");
        $this->form_validation->set_rules("status", "Status", "required|trim");

        $this->form_validation->set_message(
            array(
                'required' => "<b>{field}</b> xanası doldurulmalıdır!",
                'trim'     => "<b>{field}</b> xanasında boşluq daxil etməyin!",
            )
        );

        $validate = $this->form_validation->run();

        if($validate){
            $s_name             = $_POST['s_name'];
            $s_surname          = $_POST['s_surname'];
            $s_patronimic       = $_POST['s_patronimic'];
            $password           = 'smiiyi@1920';
            $s_email            = $_POST['s_email'];
            $s_phone            = $_POST['s_phone'];
            $group              = $_POST['category'];
            $status             = $_POST['status'];


            $data = [
                's_name'          => $s_name,
                's_surname'       => $s_surname,
                's_patronimic'    => $s_patronimic,
                's_email'         => $s_email,
                's_phone'         => $s_phone,
                's_password'      => md5(sha1($password."smii")),
                's_group_id'      => $group,
                'status'          => $status,
              ];

            $data = $this->security->xss_clean($data);

            if(isset($_SESSION['admin_id']) && isset($_SESSION['admin_status']) && isset($_SESSION['admin_category'])){

                $this->item2_model->add($data);

                redirect(base_url('admin_item_c_list'));

            }else{
                redirect(base_url('admin_login'));
                exit();
            }


        }else{
            $viewData = new stdClass();

            $get_all_item_category = $this->item2_model->get_all_item_category();
            $get_all_item_status   = $this->item2_model->get_all_item_status();
            $get_all_item_speciality   = $this->item2_model->get_all_item_speciality();
            $viewData->get_all_item_category = $get_all_item_category;
            $viewData->get_all_item_status   = $get_all_item_status;
            $viewData->get_all_item_speciality = $get_all_item_speciality;

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
        $item = $this->item2_model->get_single(
            array("c_id" => $id)
        );

        $get_all_item_category = $this->item2_model->get_all_item_category();
        $get_all_item_status   = $this->item2_model->get_all_item_status();

        $get_all_item_speciality   = $this->item2_model->get_all_item_speciality();
        $viewData->get_all_item_category = $get_all_item_category;
        $viewData->get_all_item_status   = $get_all_item_status;

        $viewData->get_all_item_speciality = $get_all_item_speciality;

        $viewData->single_item   = $item;

        $viewData->rootFolder = $this->rootFolder;
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "update";

        $this->load->view("{$viewData->rootFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/create",$viewData);
    }

    public function updateItemAct($id){


        $this->form_validation->set_rules("s_name", "Ad", "required|trim");
        $this->form_validation->set_rules("s_surname", "Soyad", "required|trim");
        $this->form_validation->set_rules("s_patronimic", "Ata adı", "required|trim");
        $this->form_validation->set_rules("category", "Qrup nömrəsi", "required|trim");
        $this->form_validation->set_rules("s_email", "E-Mail", "required|trim");
        $this->form_validation->set_rules("speciality", "İxtisas", "required|trim");
        $this->form_validation->set_rules("status", "Status", "required|trim");

        $this->form_validation->set_message(
            array(
                'required' => "<b>{field}</b> xanası doldurulmalıdır!",
                'trim'     => "<b>{field}</b> xanasında boşluq daxil etməyin!",
            )
        );

        $validate = $this->form_validation->run();

        if($validate){
            $s_name             = $_POST['s_name'];
            $s_surname          = $_POST['s_surname'];
            $s_patronimic       = $_POST['s_patronimic'];
            $s_email            = $_POST['s_email'];
            $s_phone            = $_POST['s_phone'];
            $group              = $_POST['category'];
            $status             = $_POST['status'];

            $data_id = [
                "c_id" =>$id,
            ];


            $data = [
                's_name'          => $s_name,
                's_surname'       => $s_surname,
                's_patronimic'    => $s_patronimic,
                's_email'         => $s_email,
                's_phone'         => $s_phone,
                's_group_id'      => $group,
                'status'          => $status,
            ];

            $data = $this->security->xss_clean($data);

            if(isset($_SESSION['admin_id']) && isset($_SESSION['admin_status']) && isset($_SESSION['admin_category'])){

                $this->item2_model->update($data_id, $data);
                redirect(base_url('admin_item_c_list'));

            }else{
                redirect(base_url('admin_login'));
                exit();
            }


        }else{
            $viewData = new stdClass();

            // get single item
            $item = $this->item2_model->get_single(
                array("c_id" => $id)
            );

            $get_all_item_category = $this->item2_model->get_all_item_category();
            $get_all_item_status   = $this->item2_model->get_all_item_status();
            $get_all_item_speciality   = $this->item2_model->get_all_item_speciality();
            $viewData->get_all_item_category = $get_all_item_category;
            $viewData->get_all_item_status   = $get_all_item_status;
            $viewData->get_all_item_speciality = $get_all_item_speciality;

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

            $this->item2_model->delete(array("c_id" => $id,));
            redirect(base_url('admin_item_c_list'));

        }else{
            redirect(base_url('admin_login'));
            exit();
        }

    }

    public function detail_form($id){

        $viewData = new stdClass();

        $item = $this->item2_model->get_single(
            array("c_id" => $id)
        );

        $get_all_item_category = $this->item2_model->get_all_item_category();
        $get_all_item_status   = $this->item2_model->get_all_item_status();

        $get_all_item_speciality   = $this->item2_model->get_all_item_speciality();
        $viewData->get_all_item_category = $get_all_item_category;
        $viewData->get_all_item_status   = $get_all_item_status;

        $viewData->get_all_item_speciality = $get_all_item_speciality;
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

            $this->item2_model->update(array("c_id" => $post_id,), array("status" => $response['checkbox_val']));

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