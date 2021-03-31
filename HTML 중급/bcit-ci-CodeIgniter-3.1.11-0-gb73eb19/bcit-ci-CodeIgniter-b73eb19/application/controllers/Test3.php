<? if ( ! defined('BASEPATH') ) exit('No direct script access allowed');
class Test extends CI_Controller {
	public function form(){
		$this->load->view("dynamic_form");
	}
	public function dynamic_form()
	{ 
		if ( $_POST["msg"] == "야호" ) echo "잘했어요.";
		else echo "못했어요.";
	}
}
?>