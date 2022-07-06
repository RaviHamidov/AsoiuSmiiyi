<?php

class ItemController extends CI_Controller{

    public $rootFolder = "";
    public $viewFolder = "";
    public $subViewFolder = "";

    public function __construct()
    {
        parent::__construct();
        $this->rootFolder = "admin";
        $this->viewFolder = "item";
//        $this->subViewFolder = "add";

        $this->load->model("item_model");
    }

    public function index(){
        $viewData = new stdClass();


        $items = $this->item_model->get_all();

        $viewData->rootFolder = $this->rootFolder;
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "list";

        $viewData->items = $items;

        $this->load->view("{$viewData->rootFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/list",$viewData);
    }


    public function createItem(){
        $viewData = new stdClass();

        // $get_all_item_category = $this->item_model->get_all_item_category();
        $get_all_item_status   = $this->item_model->get_all_item_status();
        // $viewData->get_all_item_category = $get_all_item_category;
        $viewData->get_all_item_status   = $get_all_item_status;

        $viewData->rootFolder = $this->rootFolder;
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "add";

        $this->load->view("{$viewData->rootFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/create",$viewData);
    }

    public function createItemAct(){

        $this->form_validation->set_rules("title_az", "TITLE AZ", "required|trim");
        $this->form_validation->set_rules("descr_az", "DESCRIPTION AZ", "required|trim");

        // $this->form_validation->set_rules("title_en", "TITLE EN", "required|trim");
        // $this->form_validation->set_rules("descr_en", "DESCRIPTION EN", "required|trim");

        // $this->form_validation->set_rules("title_ru", "TITLE RU", "required|trim");
        // $this->form_validation->set_rules("descr_ru", "DESCRIPTION RU", "required|trim");

        // $this->form_validation->set_rules("title_tr", "TITLE TR", "required|trim");
        // $this->form_validation->set_rules("descr_tr", "DESCRIPTION TR", "required|trim");

        $this->form_validation->set_rules("date", "DATE", "required|trim");
        $this->form_validation->set_rules("status", "STATUS", "required|trim");

        $this->form_validation->set_message(
            array(
                'required' => "<b>{field}</b> xanası doldurulmalıdır!",
                'trim'     => "<b>{field}</b> xanasında boşluq daxil etməyin!",
            )
        );

        $validate = $this->form_validation->run();

        if($validate){
            $title_az = $_POST['title_az'];
            $descr_az = $_POST['descr_az'];

            $title_en = $_POST['title_en'];
            $descr_en = $_POST['descr_en'];

            $title_ru = $_POST['title_ru'];
            $descr_ru = $_POST['descr_ru'];

            $date     = $_POST['date'];
            $status   = $_POST['status'];

            $config['upload_path']          = 'upload/events/';
            $config['allowed_types']    = 'gif|jpg|png|pdf|jpeg|doc|docx';
            $config['encrypt_name']    = true;
            

            $this->load->library('upload', $config);

            $this->upload->initialize($config);

            if ($this->upload->do_upload('user_file')){
                $data     = $this->upload->data('file_name');
                $data_ext = $this->upload->data('file_ext');

                $img_name = $data;
                $img_ext = $data_ext;
            }else{

                $img_name = '';
                $img_ext = '.png';
            }

            if ($this->upload->do_upload('user_file_file')){
                $datafile     = $this->upload->data('file_name');

                $data_name = $datafile;
                
            }else{

                $data_name = '';
            }

            $data = [
                'title'          => $title_az,
                'title_en'       => $title_en,
                'title_ru'       => $title_ru,
                'description'    => $descr_az,
                'description_en' => $descr_en,
                'description_ru' => $descr_ru,
                'date'           => $date,
                'img'            => $img_name,
                'img_ext'        => $img_ext,
                'file'           => $data_name,
                'status'         => $status,
            ];

            $data = $this->security->xss_clean($data);

            
            if(isset($_SESSION['admin_id']) && isset($_SESSION['admin_status']) && isset($_SESSION['admin_category'])){

                $this->item_model->add($data);

                redirect(base_url('admin_item_list'));

            }else{
                redirect(base_url('admin_login'));
                exit();
            }


        }else{
            $viewData = new stdClass();

            // $get_all_item_category = $this->item_model->get_all_item_category();
            $get_all_item_status   = $this->item_model->get_all_item_status();
            // $viewData->get_all_item_category = $get_all_item_category;
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
        $item = $this->item_model->get_single(
            array("id" => $id)
        );

        // $get_all_item_category = $this->item_model->get_all_item_category();
        $get_all_item_status   = $this->item_model->get_all_item_status();
        // $viewData->get_all_item_category = $get_all_item_category;
        $viewData->get_all_item_status   = $get_all_item_status;

        $viewData->single_item   = $item;

        $viewData->rootFolder = $this->rootFolder;
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "update";

        $this->load->view("{$viewData->rootFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/create",$viewData);
    }

    public function updateItemAct($id){

        $this->form_validation->set_rules("title_az", "TITLE AZ", "required|trim");
        $this->form_validation->set_rules("descr_az", "DESCRIPTION AZ", "required|trim");
        $this->form_validation->set_rules("date", "DATE", "required|trim");
        // $this->form_validation->set_rules("category", "CATEGORY", "required|trim");
        $this->form_validation->set_rules("status", "STATUS", "required|trim");

        $this->form_validation->set_message(
            array(
                'required' => "<b>{field}</b> xanası doldurulmalıdır!",
                'trim'     => "<b>{field}</b> xanasında boşluq daxil etməyin!",
            )  
        );

        $validate = $this->form_validation->run();

        if($validate){
            $title_az = $_POST['title_az'];
            $descr_az = $_POST['descr_az'];

            $title_en = $_POST['title_en'];
            $descr_en = $_POST['descr_en'];

            $title_ru = $_POST['title_ru'];
            $descr_ru = $_POST['descr_ru'];

            $date     = $_POST['date'];
            // $category = $_POST['category'];
            $status   = $_POST['status'];

            $data_id = [
                "id" =>$id,
            ];


            $config['upload_path']      = 'upload/events/';
            $config['allowed_types']    = 'gif|jpg|png|pdf|jpeg|docx|doc';
            $config['encrypt_name']    = true;

            $this->load->library('upload', $config);

            $this->upload->initialize($config);

            if ($this->upload->do_upload('user_file')){
                $data     = $this->upload->data('file_name');
                $data_ext = $this->upload->data('file_ext');

                $img_name = $data;
                $img_ext = $data_ext;
            }else{

                $get_current_img = $this->item_model->get_single(
                    array("id" => $id)
                );

                $img_name = $get_current_img->img;
                $img_ext  = $get_current_img->img_ext;
            }

            if ($this->upload->do_upload('user_file_file')){
                $data_file     = $this->upload->data('file_name');
                // $data_ext = $this->upload->data('file_ext');

                $file_name = $data_file;
                // $img_ext = $data_ext;
            }else{

                $get_current_file = $this->item_model->get_single(
                    array("id" => $id)
                );

                $file_name = $get_current_file->file;
                // $img_ext  = $get_current_img->img_ext;
            }


            $data = [
                'title'          => $title_az,
                'title_en'       => $title_en,
                'title_ru'       => $title_ru,
                'description'    => $descr_az,
                'description_en' => $descr_en,
                'description_ru' => $descr_ru,
                'date'           => $date,
                'img'            => $img_name,
                'file'           => $file_name,
                'img_ext'        => $img_ext,
                'status'         => $status,
            ];
            // print_r("<pre>");
            // print_r($data);
            // die();

            $data = $this->security->xss_clean($data);

            if(isset($_SESSION['admin_id']) && isset($_SESSION['admin_status']) && isset($_SESSION['admin_category'])){

                $this->item_model->update($data_id, $data);
                redirect(base_url('admin_item_list'));

            }else{
                redirect(base_url('admin_login'));
                exit();
            }


        }else{
            $viewData = new stdClass();

            // get single item
            $item = $this->item_model->get_single(
                array("id" => $id)
            );

            $get_all_item_category = $this->item_model->get_all_item_category();
            $get_all_item_status   = $this->item_model->get_all_item_status();
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

            $this->item_model->delete(array("id" => $id,));
            redirect(base_url('admin_item_list'));

        }else{
            redirect(base_url('admin_login'));
            exit();
        }

    }

    public function detail_form($id){

        $viewData = new stdClass();

        $item = $this->item_model->get_single(
            array("id" => $id)
        );

        // $get_all_item_category = $this->item_model->get_all_item_category();
        $get_all_item_status   = $this->item_model->get_all_item_status();
        // $viewData->get_all_item_category = $get_all_item_category;
        $viewData->get_all_item_status   = $get_all_item_status;

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

            $this->item_model->update(array("id" => $post_id,), array("status" => $response['checkbox_val']));

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