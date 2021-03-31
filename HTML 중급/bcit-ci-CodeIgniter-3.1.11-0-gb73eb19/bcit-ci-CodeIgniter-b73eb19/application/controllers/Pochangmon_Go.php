<? if ( ! defined('BASEPATH') ) exit('No direct script access allowed');
class Pochangmon_Go extends CI_Controller {
	public function form(){
		$this->load->view("pochangmon_Go");
	}
	public function pochangmon_capture(){
		$this->load->model("pochangmon_tools");
		$date = date("Y-m-d H:i:s");
		if($this->pochangmon_tools->pochangmon_capture($_POST["name"], $date))
			echo " ".date("Y-m-d H:i:s")." 에 ".$_POST["name"]." 을(를) 포획했다!";
		else echo $_POST["name"]." 은(는) 이미 포획했다!";
	}
	
	public function pochangmon_call(){
		$this->load->model("pochangmon_tools");
		
		$result = $this->pochangmon_tools->pochangmon_call($_POST["name"]);
		
		foreach($result->result_array() as $catch)
			echo $catch["date"]." 에 포획했던 ".$catch["name"]." 을(를) 소환했다!";
	}
}
?>