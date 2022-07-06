<?php 

class UserController extends CI_controller
{
	public function index()
	{
		$this->load->view('user/index');
	}
	
	public function single()
	{
		$this->load->view('user/single-page');
	}

	public function contact()
	{
		$this->load->view('user/contact');
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
	public function cabinet()
	{
		$this->load->view('user/cabinet/index');
	}

	public function announcement()
	{
		$this->load->view('user/announcement/index');
	}

	public function uni_admission()
	{
		$this->load->view('user/uni-admission');
	}
}




 ?>