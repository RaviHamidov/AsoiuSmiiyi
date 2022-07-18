<?php

class Item8Controller extends CI_Controller{

    public $rootFolder = "";
    public $viewFolder = "";
    public $subViewFolder = "";

    public function __construct()
    {
        parent::__construct();
        $this->rootFolder = "admin";
        $this->viewFolder = "item8";

        $this->load->model("item8_model");
    }

    public function index(){
        $viewData = new stdClass();


        $items = $this->item8_model->get_all();

        $viewData->rootFolder = $this->rootFolder;
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "list";

        $viewData->items = $items;

        $this->load->view("{$viewData->rootFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/list",$viewData);
    }






    public function createItem(){
        $viewData = new stdClass();

        $get_all_item_category = $this->item8_model->get_all_item_category();
        $viewData->get_all_item_category = $get_all_item_category;
        $get_all_item_group = $this->item8_model->get_all_item_group();
        $viewData->get_all_item_group   = $get_all_item_group;


        $viewData->rootFolder = $this->rootFolder;
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "add";

        $this->load->view("{$viewData->rootFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/create",$viewData);
    }


    public function selectStudents($groupId)
    {
        $viewData = new stdClass();

        $students = $this->item8_model->get_all_students_by_group_id($groupId);

        $viewData->students   =$students;


        $viewData->rootFolder = $this->rootFolder;
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "add";
        $this->load->view("{$viewData->rootFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/student_list",$viewData);
    }

    public function selectStudents_list()
    {
        
    }
    
    
    public function addScore(){

        $point    = $_POST['point'];

        $title_az = $_POST['title_az'];
        $descr_az = $_POST['descr_az'];

        $data = [
            'ce_title'          => $title_az,
            'ce_title_en'       => $title_en,
            'ce_title_ru'       => $title_ru,
            'ce_title_tr'       => $title_tr,
            'ce_description'    => $descr_az,
            'ce_description_en' => $descr_en,
            'ce_description_ru' => $descr_ru,
            'ce_description_tr' => $descr_tr,
            'ce_date'           => $date,
            'ce_category'       => $category,
            'ce_img'            => $img_name,
            'point'             => $point,
            'ce_img_ext'        => $img_ext,
            'ce_status'         => $status,
            'ce_creater_id'     => $_SESSION['admin_id'],
            'ce_creat_date'     => date("Y-m-d H:i:s"),
        ];

        $data = $this->security->xss_clean($data);


        if(isset($_SESSION['admin_id']) && isset($_SESSION['admin_status']) && isset($_SESSION['admin_category'])){

            $this->item8_model->add($data);

            redirect(base_url('admin_item_ce_list'));

        }else{
            redirect(base_url('admin_login'));
            exit();
        }



    }
    

    public function createItemAct(){

    //     $this->form_validation->set_rules("point", "POİNT", "required|trim");
    //     $this->form_validation->set_rules("title_az", "TITLE AZ", "required|trim");
    //     $this->form_validation->set_rules("descr_az", "DESCRIPTION AZ", "required|trim");

    //     // $this->form_validation->set_rules("title_en", "TITLE EN", "required|trim");
    //     // $this->form_validation->set_rules("descr_en", "DESCRIPTION EN", "required|trim");

    //     // $this->form_validation->set_rules("title_ru", "TITLE RU", "required|trim");
    //     // $this->form_validation->set_rules("descr_ru", "DESCRIPTION RU", "required|trim");

    //     // $this->form_validation->set_rules("title_tr", "TITLE TR", "required|trim");
    //     // $this->form_validation->set_rules("descr_tr", "DESCRIPTION TR", "required|trim");

    //     $this->form_validation->set_rules("date", "DATE", "required|trim");
    //     $this->form_validation->set_rules("category", "CATEGORY", "required|trim");
    //     $this->form_validation->set_rules("status", "STATUS", "required|trim");

        // $this->form_validation->set_message(
        //     array(
        //         'required' => "<b>{field}</b> xanası doldurulmalıdır!",
        //         'trim'     => "<b>{field}</b> xanasında boşluq daxil etməyin!",
        //     )
        // );

        // $validate = $this->form_validation->run();

        // if($validate){

            $point    = $_POST['point'];

            $title_az = $_POST['title_az'];
            $descr_az = $_POST['descr_az'];

            $title_en = $_POST['title_en'];
            $descr_en = $_POST['descr_en'];

            $title_ru = $_POST['title_ru'];
            $descr_ru = $_POST['descr_ru'];

            $title_tr = $_POST['title_tr'];
            $descr_tr = $_POST['descr_tr'];

            $date     = $_POST['date'];
            $category = $_POST['category'];
            $status   = $_POST['status'];

            $config['upload_path']      = 'upload/certificates/';
            $config['allowed_types']    = 'gif|jpg|png|pdf|jpeg';

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

            $data = [
                'ce_title'          => $title_az,
                'ce_title_en'       => $title_en,
                'ce_title_ru'       => $title_ru,
                'ce_title_tr'       => $title_tr,
                'ce_description'    => $descr_az,
                'ce_description_en' => $descr_en,
                'ce_description_ru' => $descr_ru,
                'ce_description_tr' => $descr_tr,
                'ce_date'           => $date,
                'ce_category'       => $category,
                'ce_img'            => $img_name,
                'point'             => $point,
                'ce_img_ext'        => $img_ext,
                'ce_status'         => $status,
                'ce_creater_id'     => $_SESSION['admin_id'],
                'ce_creat_date'     => date("Y-m-d H:i:s"),
            ];

            $data = $this->security->xss_clean($data);


            if(isset($_SESSION['admin_id']) && isset($_SESSION['admin_status']) && isset($_SESSION['admin_category'])){

                $this->item8_model->add($data);

                redirect(base_url('admin_item_ce_list'));

            }else{
                redirect(base_url('admin_login'));
                exit();
            }


        // // }else{
        //     $viewData = new stdClass();

        //     $get_all_item_group = $this->item8_model->get_all_item_group();
        //     $viewData->get_all_item_group   = $get_all_item_group;

        //     $get_all_item_category = $this->item8_model->get_all_item_category();
        //     $get_all_item_status   = $this->item8_model->get_all_item_status();
        //     $viewData->get_all_item_category = $get_all_item_category;
        //     $viewData->get_all_item_status   = $get_all_item_status;

        //     $viewData->rootFolder = $this->rootFolder;
        //     $viewData->viewFolder = $this->viewFolder;
        //     $viewData->subViewFolder = "add";
        //     $viewData->form_error = true; //Start form validation variable "set"

        //     $this->load->view("{$viewData->rootFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/create",$viewData);

        // }


    }

    public function update_form($id){

        $viewData = new stdClass();

        // get single item
        $item = $this->item8_model->get_single(
            array("ce_id" => $id)
        );

        $get_all_item_category = $this->item8_model->get_all_item_category();
        $get_all_item_status   = $this->item8_model->get_all_item_status();
        $viewData->get_all_item_category = $get_all_item_category;
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
        $this->form_validation->set_rules("category", "CATEGORY", "required|trim");
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

            $title_tr = $_POST['title_tr'];
            $descr_tr = $_POST['descr_tr'];

            $date     = $_POST['date'];
            $category = $_POST['category'];
            $status   = $_POST['status'];

            $data_id = [
                "ce_id" =>$id,
            ];

            $config['upload_path']      = 'upload/certificates/';
            $config['allowed_types']    = 'gif|jpg|png|pdf|jpeg';

            $this->load->library('upload', $config);

            $this->upload->initialize($config);

            if ($this->upload->do_upload('user_file')){
                $data     = $this->upload->data('file_name');
                $data_ext = $this->upload->data('file_ext');

                $img_name = $data;
                $img_ext = $data_ext;
            }else{

                $get_current_img = $this->item8_model->get_single(
                    array("ce_id" => $id)
                );

                $img_name = $get_current_img->ce_img;
                $img_ext  = $get_current_img->ce_img_ext;
            }

            $data = [
                'ce_title'          => $title_az,
                'ce_title_en'       => $title_en,
                'ce_title_ru'       => $title_ru,
                'ce_title_tr'       => $title_tr,
                'ce_description'    => $descr_az,
                'ce_description_en' => $descr_en,
                'ce_description_ru' => $descr_ru,
                'ce_description_tr' => $descr_tr,
                'ce_date'           => $date,
                'ce_category'       => $category,
                'ce_img'            => $img_name,
                'ce_img_ext'        => $img_ext,
                'ce_status'         => $status,
                'ce_updater_id'     => $_SESSION['admin_id'],
                'ce_update_date'    => date("Y-m-d H:i:s"),
            ];

            $data = $this->security->xss_clean($data);

            if(isset($_SESSION['admin_id']) && isset($_SESSION['admin_status']) && isset($_SESSION['admin_category'])){

                $this->item8_model->update($data_id, $data);
                redirect(base_url('admin_item_ce_list'));

            }else{
                redirect(base_url('admin_login'));
                exit();
            }


        }else{
            $viewData = new stdClass();

            // get single item
            $item = $this->item8_model->get_single(
                array("ce_id" => $id)
            );

            $get_all_item_category = $this->item8_model->get_all_item_category();
            $get_all_item_status   = $this->item8_model->get_all_item_status();
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

            $this->item8_model->delete(array("ce_id" => $id,));
            redirect(base_url('admin_item_ce_list'));

        }else{
            redirect(base_url('admin_login'));
            exit();
        }

    }

    public function detail_form($id){

        $viewData = new stdClass();

        $item = $this->item8_model->get_single(
            array("ce_id" => $id)
        );

//        $get_all_item_category = $this->item8_model->get_all_item_category();
//        $get_all_item_status   = $this->item8_model->get_all_item_status();
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

            $this->item8_model->update(array("ce_id" => $post_id,), array("ce_status" => $response['checkbox_val']));

            echo json_encode($response);

        }else{
            redirect(base_url('admin_login'));
            exit();
        }
    }


}