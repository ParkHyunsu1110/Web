<? if(! defined('BASEPATH')) exit('No direct script access allowed');
Class ExInfo extends CI_Controller{
	public function exform(){
		$this->load->view("exform");
	}
	public function process_add_data(){
		$this->load->model("ExInfo_tools");
		//$this->ExInfo_tools->set_by_ExInfo($_POST["id"],$_POST["pw"],$_POST["name"],$_POST["gender"],$_POST["birthday"]);
		if($this->ExInfo_tools->set_by_ExInfo($_POST["id"],$_POST["pw"],$_POST["name"],$_POST["gender"],$_POST["birthday"]))
			echo "성공";
		else echo "실패";
	}
}
?>