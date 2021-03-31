<? if(! defined('BASEPATH')) exit('No direct script access allowed');
Class Html5_validation extends CI_Controller{
	public function form (){
		$this->load->view("html5_validation_form");
	}
	public function receive(){
		echo $_POST["name"]." ".$_POST["id"]." ".$_POST["pw"];
	}
}
?>