<?php 

class Lesson_exam_table extends CI_controller{


    public function index(){
        $data['group'] = $this->db->get('item_category2')->result();
       
        $this->load->view('admin/exam_lesson/exam_create',$data);
    }

    public function index_act(){
       $group = $_POST['group'];
       $group = $this->security->xss_clean($group);
       if(!empty($group)){


            $config['upload_path']      = 'upload/exam/';
            $config['allowed_types']    = 'gif|jpg|png|pdf|jpeg';
            $config['encrypt_name']     = true;

            $this->load->library('upload', $config);

            $this->upload->initialize($config);

            if ($this->upload->do_upload('exam')){
                $data     = $this->upload->data('file_name');
                $data_ext = $this->upload->data('file_ext');

                $img_name = $data;
                $img_ext = $data_ext;
            }else{

                $img_name = '';
                $img_ext = '';
            }


            if ($this->upload->do_upload('lesson')){
                $data2     = $this->upload->data('file_name');
                $data_ext2 = $this->upload->data('file_ext');

                $img_name2 = $data2;
                $img_ext2 = $data_ext2;
            }else{

                $img_name2 = '';
                $img_ext2 = '';
            }


            $data = [
                'le_group_no'   => $group, 
                'lesson_table'  => $img_name, 
                'lesson_ext'    => $img_ext, 
                'exam_table'    => $img_name2, 
                'exam_ext'      => $img_ext2, 
            ];

            $data = $this->security->xss_clean($data);
            
            if(isset($_SESSION['admin_id']) && isset($_SESSION['admin_status']) && isset($_SESSION['admin_category'])){
                $this->db->insert('lesson_exam_table',$data);
                $this->session->set_flashdata('success',"Done!");
                redirect(base_url('exam_lesson'));
            }else{
                redirect(base_url('admin_login'));
                exit();
            }


       }else{
            $this->session->set_flashdata('err',"Boşluq buraxmayın!");
			redirect($_SERVER['HTTP_REFERER']);
       }
    }

    public function exam_list(){
        
        $data['exam_data'] = $this->db->order_by('le_id','DESC')
        ->join('item_category2','item_category2.group_id = lesson_exam_table.le_group_no','left')
        ->get('lesson_exam_table')->result();
        // print_r('<pre>');
        // print_r($data['exam_data']);
        // die;
        $this->load->view('admin/exam_lesson/exam_list',$data);
    }
    

    public function exam_delete($id){
        if(isset($_SESSION['admin_id']) && isset($_SESSION['admin_status']) && isset($_SESSION['admin_category'])){
            $id = $this->security->xss_clean($id);

            $this->db->where('le_id',$id)->delete('lesson_exam_table');
            redirect(base_url('exam_list'));

        }else{
            redirect(base_url('admin_login'));
            exit();
        }
        
    }

}