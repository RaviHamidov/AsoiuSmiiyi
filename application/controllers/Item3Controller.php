<?php

class Item3Controller extends CI_Controller{

    public $rootFolder = "";
    public $viewFolder = "";
    public $subViewFolder = "";

    public function __construct()
    {
        parent::__construct();
        $this->rootFolder = "admin";
        $this->viewFolder = "item3";
//        $this->subViewFolder = "add";

        $this->load->model("item3_model");
    }

    public function index(){
        $viewData = new stdClass();


        $items = $this->item3_model->get_all();

        $viewData->rootFolder = $this->rootFolder;
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "list";

        $viewData->items = $items;

        $this->load->view("{$viewData->rootFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/list",$viewData);
    }


    public function createItem(){
        $viewData = new stdClass();

        $get_all_item_category = $this->item3_model->get_all_item_category();
        $get_all_item_status   = $this->item3_model->get_all_item_status();
        $get_all_item_speciality  = $this->item3_model->get_all_item_speciality();
        $viewData->get_all_item_category = $get_all_item_category;
        $viewData->get_all_item_status   = $get_all_item_status;
        $viewData->get_all_item_speciality   = $get_all_item_speciality;
        $viewData->rootFolder = $this->rootFolder;
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "add";

        $this->load->view("{$viewData->rootFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/create",$viewData);
    }

    public function createItemAct(){

        $this->form_validation->set_rules("t_name", "Ad", "required|trim");
        $this->form_validation->set_rules("t_surname", "Soyad", "required|trim");
<<<<<<< HEAD
        $this->form_validation->set_rules("email", "E-Mail", "required|trim");
        $this->form_validation->set_rules("t_speciality", "İxtisas", "required|trim");
=======
        $this->form_validation->set_rules("t_patronimic", "Ata adı", "required|trim");
        $this->form_validation->set_rules("email", "E-Mail", "required|trim");
        $this->form_validation->set_rules("t_speciality", "İxtisas", "required|trim");

        $this->form_validation->set_rules("date", "Tarix", "required|trim");
>>>>>>> f4056484192eded866d6ef619ac442ba62e2ca1d
        $this->form_validation->set_rules("t_sicentific", "Emli dərəcə", "required|trim");
        $this->form_validation->set_rules("status", "Status", "required|trim");

        $this->form_validation->set_message(
            array(
                'required' => "<b>{field}</b> xanası doldurulmalıdır!",
                'trim'     => "<b>{field}</b> xanasında boşluq daxil etməyin!",
            )
        );

        $validate = $this->form_validation->run();

        if($validate){
            $t_name        = $_POST['t_name'];
            $t_surname     = $_POST['t_surname'];
            $speciality    = $_POST['t_speciality'];

            
            $t_patronimic  = $_POST['t_patronimic'];
            $t_sicentific  = $_POST['t_sicentific'];

            $t_email       = $_POST['email'];
            $t_experience  = $_POST['experience'];

            $language      = $_POST['language'];
            $skills        = $_POST['skills'];


            $status        = $_POST['status'];
            $dob           = $_POST['date'];
            $facebook      = $_POST['facebook'];
            $linkedin      = $_POST['linkedin'];
            $twitter       = $_POST['twitter'];
            $phone         = $_POST['phone'];

            $config['upload_path']      = 'upload/teachers/';
            $config['allowed_types']    = 'gif|jpg|png|pdf|jpeg';
            $config['encrypt_name']     = true;
            

            $this->load->library('upload', $config);

            $this->upload->initialize($config);

            if ($this->upload->do_upload('user_file')){
                $data     = $this->upload->data('file_name');
<<<<<<< HEAD
                $img_name = $data;
            }else{

                $img_name = '';
=======
                $data_ext = $this->upload->data('file_ext');

                $img_name = $data;
                $img_ext = $data_ext;
            }else{

                $img_name = '';
                $img_ext = '.png';
>>>>>>> f4056484192eded866d6ef619ac442ba62e2ca1d
            }

            $data = [
                't_profile_photo'       => $img_name,
                't_name'                => $t_name,
                't_surname'             => $t_surname,
                't_patronimic'          => $t_patronimic,
                't_scientific_level_id' => $t_sicentific,
                't_e_mail'              => $t_email,
                't_speciality'          => $speciality,
                't_experience'          => $t_experience,
                't_language'            => $language,
                't_skills'              => $skills,
                't_dob'                 => $dob,
                't_facebook'            => $facebook,
                't_linkedin'            => $linkedin,
                't_twitter'             => $twitter,
                't_phone'               => $phone,
                't_status'              => $status,
            ];

            $data = $this->security->xss_clean($data);

            // print_r("<pre>".$speciality);
            // print_r($data);
            // die();


            if(isset($_SESSION['admin_id']) && isset($_SESSION['admin_status']) && isset($_SESSION['admin_category'])){

                $this->item3_model->add($data);

                redirect(base_url('admin_item_t_list'));

            }else{
                redirect(base_url('admin_login'));
                exit();
            }


        }else{
            $viewData = new stdClass();

            $get_all_item_category = $this->item3_model->get_all_item_category();
            $get_all_item_status   = $this->item3_model->get_all_item_status();
            $get_all_item_speciality  = $this->item3_model->get_all_item_speciality();
            $viewData->get_all_item_category     = $get_all_item_category;
            $viewData->get_all_item_status       = $get_all_item_status;
            $viewData->get_all_item_speciality   = $get_all_item_speciality;

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
        $item = $this->item3_model->get_single(
            array("t_id" => $id)
        );

        $get_all_item_category = $this->item3_model->get_all_item_category();
        $get_all_item_status   = $this->item3_model->get_all_item_status();
        $get_all_item_speciality  = $this->item3_model->get_all_item_speciality();
        $viewData->get_all_item_category = $get_all_item_category;
        $viewData->get_all_item_status   = $get_all_item_status;
        $viewData->get_all_item_speciality   = $get_all_item_speciality;
        $viewData->single_item   = $item;

        $viewData->rootFolder = $this->rootFolder;
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "update";

        $this->load->view("{$viewData->rootFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/create",$viewData);
    }

    public function updateItemAct($id){

        $this->form_validation->set_rules("t_name", "Ad", "required|trim");
        $this->form_validation->set_rules("t_surname", "Soyad", "required|trim");
<<<<<<< HEAD
        $this->form_validation->set_rules("email", "E-Mail", "required|trim");
        $this->form_validation->set_rules("t_speciality", "İxtisas", "required|trim");
=======
        $this->form_validation->set_rules("t_patronimic", "Ata adı", "required|trim");
        $this->form_validation->set_rules("email", "E-Mail", "required|trim");
        $this->form_validation->set_rules("t_speciality", "İxtisas", "required|trim");

        $this->form_validation->set_rules("date", "Tarix", "required|trim");
>>>>>>> f4056484192eded866d6ef619ac442ba62e2ca1d
        $this->form_validation->set_rules("t_sicentific", "Emli dərəcə", "required|trim");
        $this->form_validation->set_rules("status", "Status", "required|trim");

        $this->form_validation->set_message(
            array(
                'required' => "<b>{field}</b> xanası doldurulmalıdır!",
                'trim'     => "<b>{field}</b> xanasında boşluq daxil etməyin!",
            )
        );

        $validate = $this->form_validation->run();

        if($validate){
            $t_name        = $_POST['t_name'];
            $t_surname     = $_POST['t_surname'];
            $speciality    = $_POST['t_speciality'];

            
            $t_patronimic  = $_POST['t_patronimic'];
            $t_sicentific  = $_POST['t_sicentific'];

            $t_email       = $_POST['email'];
            $t_experience  = $_POST['experience'];

            $language      = $_POST['language'];
            $skills        = $_POST['skills'];


            $status        = $_POST['status'];
            $dob           = $_POST['date'];
            $facebook      = $_POST['facebook'];
            $linkedin      = $_POST['linkedin'];
            $twitter       = $_POST['twitter'];
            $phone         = $_POST['phone'];

            $data_id = [
                "t_id" =>$id,
            ];

<<<<<<< HEAD
            $config['upload_path']      = 'upload/teachers/';
            $config['allowed_types']     = 'gif|jpg|png|pdf|jpeg';
            $config['encrypt_name']      = true;
=======
            $config['up load_path']      = 'upload/teachers/';
            $config['allowed_types']    = 'gif|jpg|png|pdf|jpeg';
            $config['encrypt_name']     = true;
>>>>>>> f4056484192eded866d6ef619ac442ba62e2ca1d

            

            $this->load->library('upload', $config);

            $this->upload->initialize($config);

            if ($this->upload->do_upload('user_file')){
                $data     = $this->upload->data('file_name');
<<<<<<< HEAD
                $img_name = $data;
=======
                $data_ext = $this->upload->data('file_ext');

                $img_name = $data;
                $img_ext = $data_ext;
>>>>>>> f4056484192eded866d6ef619ac442ba62e2ca1d
            }else{
                $get_current_img = $this->item3_model->get_single(
                    array("t_id" => $id)
                );

<<<<<<< HEAD
                $img_name = $get_current_img->t_profile_photo;
=======
                $img_name = $get_current_img->img;
>>>>>>> f4056484192eded866d6ef619ac442ba62e2ca1d
            }

            $data = [
                't_profile_photo'       => $img_name,
                't_name'                => $t_name,
                't_surname'             => $t_surname,
                't_patronimic'          => $t_patronimic,
                't_scientific_level_id' => $t_sicentific,
                't_e_mail'              => $t_email,
                't_speciality'          => $speciality,
                't_experience'          => $t_experience,
                't_language'            => $language,
                't_skills'              => $skills,
                't_dob'                 => $dob,
                't_facebook'            => $facebook,
                't_linkedin'            => $linkedin,
                't_twitter'             => $twitter,
                't_phone'               => $phone,
                't_status'              => $status,
            ];

            $data = $this->security->xss_clean($data);


<<<<<<< HEAD
=======


>>>>>>> f4056484192eded866d6ef619ac442ba62e2ca1d
            if(isset($_SESSION['admin_id']) && isset($_SESSION['admin_status']) && isset($_SESSION['admin_category'])){

                $this->item3_model->update($data_id, $data);
                redirect(base_url('admin_item_t_list'));

            }else{
                redirect(base_url('admin_login'));
                exit();
            }


        }else{
            $viewData = new stdClass();

            // get single item
            $item = $this->item3_model->get_single(
                array("t_id" => $id)
            );

            $get_all_item_category = $this->item3_model->get_all_item_category();
            $get_all_item_status   = $this->item3_model->get_all_item_status();
            $get_all_item_speciality  = $this->item3_model->get_all_item_speciality();
            $viewData->get_all_item_category = $get_all_item_category;
            $viewData->get_all_item_status   = $get_all_item_status;
            $viewData->get_all_item_speciality   = $get_all_item_speciality;
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

            $this->item3_model->delete(array("t_id" => $id,));
            redirect(base_url('admin_item_t_list'));

        }else{
            redirect(base_url('admin_login'));
            exit();
        }

    }

    public function detail_form($id){

        $viewData = new stdClass();

        $item = $this->item3_model->get_single(
            array("t_id" => $id)
        );

//        $get_all_item_category = $this->item3_model->get_all_item_category();
//        $get_all_item_status   = $this->item3_model->get_all_item_status();
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

            $this->item3_model->update(array("t_id" => $post_id,), array("t_status" => $response['checkbox_val']));

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