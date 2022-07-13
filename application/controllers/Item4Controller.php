<?php

class Item4Controller extends CI_Controller{

    public $rootFolder      = "";
    public $viewFolder      = "";
    public $subViewFolder   = "";

    public function __construct()
    {
        parent::__construct();
        $this->rootFolder = "admin";
        $this->viewFolder = "item4";

        $this->load->model("item4_model");
    }

    public function index(){
        $viewData = new stdClass();


        $items = $this->item4_model->get_all();

        $viewData->rootFolder = $this->rootFolder;
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "list";

        $viewData->items = $items;

        $this->load->view("{$viewData->rootFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/list",$viewData);
    }


    public function createItem(){
        $viewData = new stdClass();

        $get_all_item_status   = $this->item4_model->get_all_item_status();
        $viewData->get_all_item_status   = $get_all_item_status;

        $viewData->rootFolder = $this->rootFolder;
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "add";

        $this->load->view("{$viewData->rootFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/create",$viewData);
    }

    public function createItemAct(){

        $this->form_validation->set_rules("subject", "Dərsin adı", "required|trim");
        $this->form_validation->set_rules("status", "Status", "required|trim");

        $this->form_validation->set_message(
            array(
                'required' => "<b>{field}</b> xanası doldurulmalıdır!",
                'trim'     => "<b>{field}</b> xanasında boşluq daxil etməyin!",
            )
        );

        $validate = $this->form_validation->run();

        if($validate){
            $subject  = $_POST['subject'];
            $status   = $_POST['status'];

            $config['upload_path']      = 'upload/about/';
            $config['allowed_types']    = 'gif|jpg|png|pdf|jpeg|doc|docx';
            $config['encrypt_name']     = true;

            $this->load->library('upload', $config);

            $this->upload->initialize($config);

            if ($this->upload->do_upload('syllabs')){
                $data_syllabs     = $this->upload->data('file_name');

                $syllabs = $data_syllabs;
            }else{

                $syllabs = '';
            }

            if ($this->upload->do_upload('lecture')){
                $data_lecture     = $this->upload->data('file_name');

                $lecture = $data_lecture;
            }else{

                $lecture = '';
            }

            if ($this->upload->do_upload('exam')){
                $data_exam     = $this->upload->data('file_name');

                $exam = $data_exam;
            }else{

                $exam = '';
            }

            if ($this->upload->do_upload('exam_answers')){
                $data_exam_answers     = $this->upload->data('file_name');

                $exam_answers = $data_exam_answers;
            }else{

                $exam_answers = '';
            }

            $data = [
                'subject_name'      => $subject,
                'ab_status'         => $status,
                'syllabs'           => $syllabs,
                'lecture'           => $lecture,
                'exam'              => $exam,
                'exam_answers'      =>$exam_answers
            ];

            $data = $this->security->xss_clean($data);

           
            if(isset($_SESSION['admin_id']) && isset($_SESSION['admin_status']) && isset($_SESSION['admin_category'])){

                $this->item4_model->add($data);

                redirect(base_url('admin_item_ab_list'));

            }else{
                redirect(base_url('admin_login'));
                exit();
            }


        }else{
            $viewData = new stdClass();

            $get_all_item_status   = $this->item4_model->get_all_item_status();
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
        $item = $this->item4_model->get_single(
            array("ab_id" => $id)
        );
        $get_all_item_status   = $this->item4_model->get_all_item_status();
        $viewData->get_all_item_status   = $get_all_item_status;

        $viewData->single_item   = $item;

        $viewData->rootFolder = $this->rootFolder;
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "update";

        $this->load->view("{$viewData->rootFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/create",$viewData);
    }

    public function updateItemAct($id){

        $this->form_validation->set_rules("subject", "Dərsin adı", "required|trim");
        $this->form_validation->set_rules("status", "Status", "required|trim");

        $this->form_validation->set_message(
            array(
                'required' => "<b>{field}</b> xanası doldurulmalıdır!",
                'trim'     => "<b>{field}</b> xanasında boşluq daxil etməyin!",
            )
        );

        $validate = $this->form_validation->run();

        if($validate){
            $subject  = $_POST['subject'];
            $status   = $_POST['status'];

            $config['upload_path']      = 'upload/about/';
            $config['allowed_types']    = 'gif|jpg|png|pdf|jpeg|doc|docx';
            $config['encrypt_name']     = true;

            $data_id = [
                "ab_id" =>$id,
            ];

            $this->load->library('upload', $config);

            $this->upload->initialize($config);

            if ($this->upload->do_upload('syllabs')){
                $data_syllabs     = $this->upload->data('file_name');

                $syllabs = $data_syllabs;
            }else{

                $get_current_syllabs = $this->item4_model->get_single(
                    array("ab_id" => $id)
                );

                $syllabs = $get_current_syllabs->syllabs;
            }

            if ($this->upload->do_upload('lecture')){
                $data_lecture     = $this->upload->data('file_name');

                $lecture = $data_lecture;
            }else{
                $get_current_lecture = $this->item4_model->get_single(
                    array("ab_id" => $id)
                );

                $lecture = $get_current_lecture->lecture;
            }

            if ($this->upload->do_upload('exam')){
                $data_exam     = $this->upload->data('file_name');

                $exam = $data_exam;
            }else{
                $get_current_exam = $this->item4_model->get_single(
                    array("ab_id" => $id)
                );

                $exam = $get_current_exam->exam;
            }

            if ($this->upload->do_upload('exam_answers')){
                $data_exam_answers     = $this->upload->data('file_name');

                $exam_answers = $data_exam_answers;
            }else{

                $get_current_exam = $this->item4_model->get_single(
                    array("ab_id" => $id)
                );

                $exam_answers = $get_current_exam->exam_answers;

            }

            $data = [
                'subject_name'      => $subject,
                'ab_status'         => $status,
                'syllabs'           => $syllabs,
                'lecture'           => $lecture,
                'exam'              => $exam,
                'exam_answers'      => $exam_answers,
            ];

            $data = $this->security->xss_clean($data);

            if(isset($_SESSION['admin_id']) && isset($_SESSION['admin_status']) && isset($_SESSION['admin_category'])){

                $this->item4_model->update($data_id, $data);
                redirect(base_url('admin_item_ab_list'));

            }else{
                redirect(base_url('admin_login'));
                exit();
            }


        }else{
            $viewData = new stdClass();

            // get single item
            $item = $this->item4_model->get_single(
                array("ab_id" => $id)
            );

            $get_all_item_status   = $this->item4_model->get_all_item_status();
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

            $this->item4_model->delete(array("ab_id" => $id,));
            redirect(base_url('admin_item_ab_list'));

        }else{
            redirect(base_url('admin_login'));
            exit();
        }

    }

    public function detail_form($id){

        $viewData = new stdClass();

        $item = $this->item4_model->get_single(
            array("ab_id" => $id)
        );

//        $get_all_item_category = $this->item4_model->get_all_item_category();
//        $get_all_item_status   = $this->item4_model->get_all_item_status();
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

            $this->item4_model->update(array("ab_id" => $post_id,), array("ab_status" => $response['checkbox_val']));

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