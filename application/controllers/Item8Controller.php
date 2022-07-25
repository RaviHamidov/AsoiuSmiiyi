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



<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 76d0150b9f64b5553f25f3a82b3e49f837971a77
    public function list_edit(){
        $data['get_all_item_group'] = $this->db->get('item_category2')->result();
        $data['get_all_item_category'] = $this->db->get('items4')->result();

        $this->load->view('admin/item8/add/edit',$data);
    }

    public function selectStudentsPoint(){
        $groupId    = $_POST['group'];
        $subjectId  = $_POST['subject'];
        if(!empty($groupId) && !empty($subjectId)){
            
            $data = [
                'po_group_id'   => $groupId ,
                'po_subject_id' => $subjectId,
            ];

           
            $data['get_student_list'] = $this->db
            ->join('items2','items2.c_id = point.po_student_id','left')
            ->where($data)->get('point')->result();
            // print_r('<pre>');
            // print_r ($data['get_student_list']);
            // die;
            $this->load->view('admin/item8/add/student_list2',$data);
        }else{
            $this->session->set_flashdata('err', 'Diqqət! Boşluq buraxmayın!');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function update_page($id){
        
       $data['single_student'] = $this->db
       ->select('po_id,po_student_id,po_group_id,po_subject_id,po_enter_point,po_exam_point,s_name,s_surname,s_patronimic')
       ->join('items2','items2.c_id = point.po_student_id','left')
       ->where('po_id',$id)->get('point')->row();



       $this->load->view('admin/item8/add/student_list2edit',$data);
    //    print_r("<pre>");
    //    print_r($data['single_student']);

    }


    public function student_update_key_act($id){

        $entrance_score = $_POST['entrance_score'];
        $exam_score =  $_POST['exam_score'];


        if(!empty($entrance_score) && !empty($exam_score)){
            
            $data = [
                'po_enter_point'   => $entrance_score ,
                'po_exam_point' => $exam_score,
            ];
           
          
            $this->db->where('po_id',$id)->update('point',$data);
            $this->session->set_flashdata('success', 'Qiymet ugurla yenilendi!');
            redirect(base_url('list_edit'));
          
        }else{
            $this->session->set_flashdata('err', 'Diqqət! Boşluq buraxmayın!');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }
<<<<<<< HEAD
=======

>>>>>>> f4056484192eded866d6ef619ac442ba62e2ca1d
=======
>>>>>>> 76d0150b9f64b5553f25f3a82b3e49f837971a77


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


<<<<<<< HEAD
<<<<<<< HEAD
    public function selectStudents()
    {
        $groupId    = $_POST['group'];
        $subjectId  = $_POST['subject'];
        // print_r($groupId);
        // print_r($subjectId);
        // die;



        $viewData = new stdClass();

        $students = $this->item8_model->get_all_students_by_gid_sid($groupId,$subjectId);
        // print_r("<pre>");
        // print_r($students);
        // die;


        $viewData->students   =$students;
        $viewData->subjectId  =$subjectId;
=======
    public function selectStudents($groupId)
=======
    public function selectStudents()
>>>>>>> 76d0150b9f64b5553f25f3a82b3e49f837971a77
    {
        $groupId    = $_POST['group'];
        $subjectId  = $_POST['subject'];
        // print_r($groupId);
        // print_r($subjectId);
        // die;



        $viewData = new stdClass();

        $students = $this->item8_model->get_all_students_by_gid_sid($groupId,$subjectId);
        // print_r("<pre>");
        // print_r($students);
        // die;


        $viewData->students   =$students;
<<<<<<< HEAD

>>>>>>> f4056484192eded866d6ef619ac442ba62e2ca1d
=======
        $viewData->subjectId  =$subjectId;
>>>>>>> 76d0150b9f64b5553f25f3a82b3e49f837971a77

        $viewData->rootFolder = $this->rootFolder;
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "add";
        $this->load->view("{$viewData->rootFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/student_list",$viewData);
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 76d0150b9f64b5553f25f3a82b3e49f837971a77
    public function student_point_insert()
    {
        $student_id     = $_POST['student_id'];
        $groupId        = $_POST['group_id'];
        $subjectId      = $_POST['subject_id'];
        $entrance_score = $_POST['entrance_score'];
        $exam_score     = $_POST['exam_score'];

        $data = [
            'po_student_id'    => $student_id,
            'po_group_id'      => $groupId,
            'po_subject_id'    => $subjectId,
            'po_enter_point'   => $entrance_score,
            'po_exam_point'    => $exam_score,
        ];

        $data = $this->security->xss_clean($data);
        $this->db->insert('point',$data);
        redirect(base_url('selectStudentsw/'.$groupId.'/'.$subjectId));
        

        // print_r("<pre>");
        // print_r($data);
        // die;
    }

    public function selectStudentsw($groupId,$subjectId)
<<<<<<< HEAD
    {
        
        // print_r($groupId);
        // print_r($a1.' ');
        // print_r($a2);
        // die;


        $viewData = new stdClass();

        $students = $this->item8_model->get_all_students_by_gid_sid($groupId,$subjectId);
        // print_r("<pre>");
        // print_r($students);
        // die;


        $viewData->students   =$students;
        $viewData->subjectId  =$subjectId;

        $viewData->rootFolder = $this->rootFolder;
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "add";
        $this->load->view("{$viewData->rootFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/student_list",$viewData);
=======
    public function selectStudents_list()
    {
        
>>>>>>> f4056484192eded866d6ef619ac442ba62e2ca1d
=======
    {
        
        // print_r($groupId);
        // print_r($a1.' ');
        // print_r($a2);
        // die;


        $viewData = new stdClass();

        $students = $this->item8_model->get_all_students_by_gid_sid($groupId,$subjectId);
        // print_r("<pre>");
        // print_r($students);
        // die;


        $viewData->students   =$students;
        $viewData->subjectId  =$subjectId;

        $viewData->rootFolder = $this->rootFolder;
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "add";
        $this->load->view("{$viewData->rootFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/student_list",$viewData);
>>>>>>> 76d0150b9f64b5553f25f3a82b3e49f837971a77
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
    

<<<<<<< HEAD
<<<<<<< HEAD
   

=======
>>>>>>> f4056484192eded866d6ef619ac442ba62e2ca1d
=======
   

>>>>>>> 76d0150b9f64b5553f25f3a82b3e49f837971a77
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