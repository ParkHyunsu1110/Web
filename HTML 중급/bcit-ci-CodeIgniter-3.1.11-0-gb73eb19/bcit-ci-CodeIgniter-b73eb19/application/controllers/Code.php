<? if( ! defined('BASEPATH') ) exit ('No direct script access allowed');
Class Code extends CI_Controller{
	public function form (){
		$this->load->view("code");
	}
	public function receive(){
		$this->load->library("form_validation");
		
		$this->form_validation->set_rules("name","이름","required|max_length[10]|min_length[2]");
		$this->form_validation->set_rules("tel","전화번호","numeric|required");
		$this->form_validation->set_rules("id","아이디","required");
		$this->form_validation->set_rules("pw","비밀번호","required|min_length[6]");
		$this->form_validation->set_rules("gender","성별","required|in_list[남,여]");
		
		if($this->form_validation->run()) echo "정확히 입력했습니다.";
		else echo "적합하지 않은 입력이 있습니다.";
	}
}
?>