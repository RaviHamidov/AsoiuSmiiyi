<?php 

class UserController extends CI_controller
{

	public function index()
	{
		$data['teachers']  = $this->db->select('t_id,t_name,t_surname,i_c3_name,t_e_mail,t_profile_photo')
		->join('item_category3','item_category3.i_c3_id = items3.t_scientific_level_id')
		->limit(4)
		->where('length(t_profile_photo)>1')
		->order_by('t_id','RANDOM')->get('items3')->result_array();		

		$data['slides']     = $this->db
		->select("items.id,items.title,sl_img")
		->join("items","items6.ann_id = items.id")
		->limit(2)
		->order_by('sl_id','DESC')->get('items6')->result_array();

		$data['event']     = $this->db->limit(3)->where('status','1')->order_by('date','DESC')->get('items')->result_array();

		$data['adm']       = $this->db->select('ad_id,ad_name,ad_surname,duty,ad_mail,ad_img')
		->join('item_category3','item_category3.i_c3_id = administration.ad_scientific_level_id')
		->limit(4)
		->order_by('ad_id','asc')->get('administration')->result_array();	
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
		$data['event']  = $this->db->limit(3)->where('status','1')->order_by('id','DESC')->get('items')->result_array();

		$this->load->view('user/about/adnsu',$data);
	}

	public function about_smiiyi()
	{
		$data['event']  = $this->db->limit(3)->where('status','1')->order_by('id','DESC')->get('items')->result_array();

		$this->load->view('user/about/smiiyi',$data);
	}
	
	public function rehberlik()
	{
		$data['adm']       = $this->db->select('ad_id,ad_name,ad_surname,duty,ad_mail,ad_img')
		->join('item_category3','item_category3.i_c3_id = administration.ad_scientific_level_id')
		->limit(4)
		->order_by('ad_id','asc')->get('administration')->result_array();	

		$this->load->view('user/about/rehberlik',$data);
	}
	
	public function tt_tedris_plani()
	{
		$data['event']  = $this->db->limit(3)->where('status','1')->order_by('id','DESC')->get('items')->result_array();

		$this->load->view('user/tekrar_tehsil/tedrisplani',$data);
	}
	public function tt_ixtisaslar()
	{
		$data['event']  = $this->db->limit(3)->where('status','1')->order_by('id','DESC')->get('items')->result_array();

		$this->load->view('user/tekrar_tehsil/ixtisaslar',$data);
	}

	public function tt_isci_plan()
	{
		$data['event']  = $this->db->limit(3)->where('status','1')->order_by('id','DESC')->get('items')->result_array();

		$this->load->view('user/tekrar_tehsil/ishciplan',$data);
	}
	
	public function yh_tedris_qrafiki()
	{
		$data['event']  = $this->db->limit(3)->where('status','1')->order_by('id','DESC')->get('items')->result_array();

		$this->load->view('user/yenidenhazirlanma/tedris_qrafiki',$data);
	}
	
	public function yh_imtahan_sual()
	{
		$data['event']  = $this->db->limit(3)->where('status','1')->order_by('id','DESC')->get('items')->result_array();

		$this->load->view('user/yenidenhazirlanma/dis',$data);
	}
	
	public function yh_ixtisaslar()
	{
		$data['event']  = $this->db->limit(3)->where('status','1')->order_by('id','DESC')->get('items')->result_array();

		$this->load->view('user/yenidenhazirlanma/ixtisaslar',$data);
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

	public function teachers($id){
		$data['teacher']  = $this->db
		->select('t_id,t_name,t_surname,t_profile_photo,t_e_mail,i_c3_name,t_twitter,t_linkedin,t_facebook')
		->join('item_category3','item_category3.i_c3_id = items3.t_scientific_level_id')
		->join('speciality','speciality.speciality_id = items3.t_speciality')
		->where('t_speciality',$id)
		->order_by('t_id','DESC')->get('items3')->result_array();
		
		$data['spec'] = $this->db
		->where('speciality_id',$id)
		->get('speciality')->row();
		$this->load->view('user/teacher',$data);
	}

	public function tech_single($id){
		$data['teacher']  = $this->db
		->join('item_category3','item_category3.i_c3_id = items3.t_scientific_level_id')
		->where('t_id',$id)
		->order_by('t_id','DESC')->get('items3')->row();
		$data['event']  = $this->db->limit(3)->where('status','1')->order_by('id','DESC')->get('items')->result_array();
		$this->load->view('user/teacher_single',$data);
	}

	

	public function renewpass(){
		if(isset($_SESSION['user_id'])){
			$x =$_SESSION['user_id'];
		}else{
			$x = $_POST['std_id'];
		}
		
		$student['std'] = $this->db->select('c_id')->where('c_id',$x)->get('items2')->row_array();

		$this->load->view('user/cabinet/passrenew',$student);

	}
	public function renewpass_act(){
		$current = $_POST['current'];
		$new1	 = $_POST['new1'];
		$new2	 = $_POST['new2'];

	
		if(isset($_SESSION['user_id'])){

		$std1 = $this->db->select('c_id,s_password')->where('c_id',$_SESSION['user_id'])->get('items2')->row_array();

			if($current!='' && $new1!='' && $new2!=''){
				if(md5(sha1($current."smii")) == $std1['s_password']){	
					if($new1 != $new2){
						$this->session->set_flashdata('err',"Diqqət! Yeni şifrənizlə onun təkrarı uyğun gəlmir");
						redirect(base_url('renewpass'));
					}
					else{
						$data = [
							's_password'      => md5(sha1($new1."smii"))
						];
						$data = $this->security->xss_clean($data);

						$this->db->where('c_id',$_SESSION['user_id'])->update('items2', $data);
						unset($_SESSION['user_id']);
						$this->session->set_flashdata('success',"Şifrəniz uğurla dəyişdirildi, zəhmət olmasa yeni şifrənizlə daxil olun");
						redirect(base_url('login'));
					}
				}else{
					$this->session->set_flashdata('err',"Diqqət! Cari şifrənizi düzgün daxil edin, unutmusunuzsa rəhbərliyə müraciət edə bilərsiniz!");
					redirect(base_url('renewpass'));
				}
			}else{
				$this->session->set_flashdata('err',"Diqqət! Xanaları boş saxlamayın!");
				redirect(base_url('renewpass'));
			}
		}else{
			$this->session->set_flashdata('err',"Sistemə yenidən daxil olmalısınız");
			redirect(base_url('login'));
		}
		
			
		
       
	}
	
	

	public function team(){
		$data['adm']  = $this->db->select('ad_id,ad_name,ad_surname,i_c3_name,ad_mail,ad_img')
		->join('item_category3','item_category3.i_c3_id = administration.ad_scientific_level_id')
		->order_by('ad_id','asc')->get('administration')->result_array();	
		$this->load->view('user/about/team',$data);
	}
	
	public function team_single($id)
	{
		$data['adm']  = $this->db
		->join('item_category3','item_category3.i_c3_id = administration.ad_scientific_level_id')
		->where('ad_id',$id)
		->order_by('ad_id','asc')->get('administration')->row();	
		$data['event']  = $this->db->limit(3)->where('status','1')->order_by('id','DESC')->get('items')->result_array();
		$this->load->view('user/about/team_single',$data);
	}
	public function blog(){

		$data['event']  = $this->db->select('')->where('status','1')->order_by('id','DESC')->get('items')->result_array();
		
		$this->load->view('user/blog',$data);
	}
	public function blog_single($id)
	{
		$data['x']  = $this->db->where('id',$id)->order_by('id','DESC')->get('items')->row();

		$data['event']  = $this->db->limit(3)->where('status','1')->order_by('id','DESC')->get('items')->result_array();

		$query =  $this->db->where('id',$id)->order_by('id','DESC')->get('items');
		
		if ($query->num_rows() > 0){
			$this->load->view('user/blog_single',$data);
		}
		else{
			redirect(base_url('index'));
		}
		
	}


}
?>