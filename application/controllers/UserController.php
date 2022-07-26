<?php 

class UserController extends CI_controller
{
	public function index()
	{
		$data['items']  = $this->db->order_by('sl_id','DESC')->get('items6')->result_array();
		$data['event']  = $this->db->limit(3)->where('status','1')->order_by('date','DESC')->get('items')->result_array();
	
		$this->load->view('user/index',$data);
	}
	
	public function single()
	{
		$this->load->view('user/single-page');
	}

	public function contact()
	{
		$this->load->view('user/contact');
	}
	public function qeydiyyat()
	{
		$this->load->view('user/qeydiyyat');
	}

	public function about_asoiu()
	{
		$this->load->view('user/about/adnsu');
	}

	public function about_smiiyi()
	{
		$this->load->view('user/about/smiiyi');
	}
	public function about_rector()
	{
		$this->load->view('user/about/rector');
	}
	public function about_director()
	{
		$this->load->view('user/about/director');
	}
	
	public function tt_tedris_plani()
	{
		$this->load->view('user/tekrar-ali-tehsil/tedris-plani');
	}
	public function tt_ixtisaslar()
	{
		$this->load->view('user/tekrar-ali-tehsil/ixtisaslar');
	}

	public function yh_tedris_plani()
	{
		$this->load->view('user/yeniden-hazirlanma/tedris-plani');
	}
	
	public function yh_tedris_qrafiki()
	{
		$this->load->view('user/yeniden-hazirlanma/tedris-qrafiki');
	}
	
	public function yh_imtahan_sual()
	{
		$this->load->view('user/yeniden-hazirlanma/dovlet-imtahan-suallari');
	}
	
	public function yh_ixtisaslar()
	{
		$this->load->view('user/yeniden-hazirlanma/ixtisaslar');
	}

	public function login()
	{
		$this->load->view('user/login/index');
	}

	public function login_act(){
		$username = $_POST['username'];
		$password = $_POST['password'];


		if(!empty($username) && !empty($password)){

			$data = [
				's_email' 	 => $username,
				's_password' => md5(sha1($password.'smii'))
			];
		
			$data = $this->security->xss_clean($data);
			
			$check_user = $this->db->where($data)->get('items2')->row_array();
			
			if($check_user){

			
				$_SESSION['user_id']       = $check_user['c_id'];
				$_SESSION['user_status']   = $check_user['status'];
				redirect(base_url('cabinet'));

			}else{
				$this->session->set_flashdata('err',"Diqqət! E-poçt və ya şifrə yalnışdır!");
				redirect(base_url('login'));
			}
			
			

		}else{
			$this->session->set_flashdata('err',"Boşluq buraxmayın!");
			redirect(base_url('login'));
		}
	}

	public function logout(){
		unset($_SESSION['user_id']);
		unset($_SESSION['user_status']);
		$this->session->set_flashdata('success',"Sizi bir daha gözləyəcəyik :)");
		redirect(base_url('login'));
	}

	public function cabinet() 
	{
		if(isset($_SESSION['user_id'])){
			$data['student'] = $this->db
            ->join('item_category2', 'item_category2.group_id = items2.s_group_id')
            ->join('item_status', 'item_status.i_s_id = items2.status')
            ->join('speciality', 'speciality.speciality_id = item_category2.i_speciality_id')
            ->where('c_id',$_SESSION['user_id'])->get('items2')->result_array();

			$user_id = $this->db->select('s_group_id')->where('c_id',$_SESSION['user_id'])->get('items2')->row_array();
			$data['exam_list'] = $this->db->where("le_group_no",$user_id['s_group_id'])->get('lesson_exam_table')->row_array();

			$data['std_subject'] =  $this->db
			->select('co_id,subject_name,syllabs,lecture,exam,exam_answers')
			->join('items5','items5.co_group_no = items2.s_group_id')
			->join('items4','items4.ab_id = items5.co_subject_id')
			->where('c_id',$_SESSION['user_id'])->get('items2')->result_array();

			$data['std_subject_add'] =  $this->db
			->select('re_id,subject_name,syllabs,lecture,exam,exam_answers')
			->join('items4','items4.ab_id = items9.re_subject_id')
			->where('re_student_id',$_SESSION['user_id'])->get('items9')->result_array();

			$data['std_points'] =  $this->db
			->select('subject_name,po_enter_point,po_exam_point')
			->join('point','point.po_student_id = items2.c_id')
			->join('items4','items4.ab_id = point.po_subject_id')
			->where('c_id',$_SESSION['user_id'])->get('items2')->result_array();
			$this->load->view('user/cabinet/index',$data);

		
			// print_r('<pre>');
			// print_r($std_subject);
			// die();
		
			// print_r('<pre>');
			// print_r($data['exam_list']);
			// die();
		}else{
			$this->session->set_flashdata('err',"Diqqət! E-poçt və ya şifrə yalnışdır!");
			redirect(base_url('login'));
		}
	}

	public function announcement()
	{
		$data['event']  = $this->db->where('status','1')->order_by('id','DESC')->get('items')->result_array();
		
		$this->load->view('user/announcement/index',$data);
	}

	public function uni_admission()
	{
		$this->load->view('user/uni-admission');
	}
	public function ann_form($id)
	{
		$data['x']  = $this->db->where('id',$id)->order_by('id','DESC')->get('items')->row();
		
		$query =  $this->db->where('id',$id)->order_by('id','DESC')->get('items');
		if ($query->num_rows() > 0){
			$this->load->view('user/announcement/ann',$data);
		}
		else{
			redirect(base_url('index'));
		}
		
		


	}


	
	public function teachersubj($id)
	{

		$data['teacher']  = $this->db
		->join('item_category3','item_category3.i_c3_id = items3.t_scientific_level_id')
		->where('t_speciality',$id)->order_by('t_id','DESC')->get('items3')->result_array();
		
		$this->load->view('user/teachers/index',$data);


	}


public function tech_single($id)
	{

		$data['teacher1']  = $this->db
		->join('speciality','speciality.speciality_id = items3.t_speciality')
		->join('item_category3','item_category3.i_c3_id = items3.t_scientific_level_id')
		->where('t_id',$id)->order_by('t_id','DESC')->get('items3')->row();
		
		$this->load->view('user/teachers/teachersingle',$data);


	}
	

}
?>