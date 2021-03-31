<? if(! defined('BASEPATH')) exit('No direct script access allowed');
Class Html5_dynamic extends CI_Controller{
	public function form (){
		$this->load->view("html5_dynamic_form");
	}
	public function receive(){ 
		echo $_POST["name"]." ".$_POST["id"]." ".$_POST["pw"];
	}
}
?>