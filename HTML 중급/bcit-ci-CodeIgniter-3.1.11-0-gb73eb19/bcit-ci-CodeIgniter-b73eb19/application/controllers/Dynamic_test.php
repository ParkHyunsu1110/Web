<? if ( ! defined('BASEPATH') ) exit('No direct script access allowed');
Class Dynamic_test extends CI_Controller{
	public function form(){
		$this->load->view("dynamic_test_form");
		// qkrgustn.com/dynamic_test/form을 입력하면 views/dynamic_test_form 의 내용을 불러옴.
	}
}
?>