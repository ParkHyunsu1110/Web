<? if(! defined('BASEPATH')) exit('No direct script access allowed');
Class Html5 extends CI_Controller{
	public function form(){
		$this->load->view("html5_form");
	}
	public function receive(){
		$this->load->model("html5_tools");
		$this->html5_tools->receive_array($_POST["name"], $_POST["id"],$_POST["pw"]);
		$result = $this->html5_tools->receive($_POST["name"], $_POST["id"],$_POST["pw"]);
		foreach($result->result_array() as $info)
			echo $info["name"]." ".$info["id"]." ".$info["pw"]."<br/>";
	}
}
?>