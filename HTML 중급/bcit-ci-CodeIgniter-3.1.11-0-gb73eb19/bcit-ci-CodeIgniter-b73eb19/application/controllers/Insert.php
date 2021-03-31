<? if ( ! defined('BASEPATH') ) exit('No direct script access allowed');
	class Insert extends CI_Controller{
	public function insert_form(){
		$this->load->view("insert_view");
	}
	public function information(){
		$this->load->model("insert_tools");
		$this->insert_tools->set_insert( $_POST["id"],$_POST["pw"],$_POST["name"],$_POST["gender"],$_POST["birthday"]);
	}
	public function ascending() {
		$this->load->model("insert_tools");
		$result = $this->insert_tools->set_ascending();
		foreach($result->result_array() as $insert) 
			echo $insert["id"]." ".$insert["pw"]." ".$insert["name"]." ".$insert["gender"]." ".$insert["birthday"]."<br/>";
	}
	public function choice() {
		$this->load->model("insert_tools");
		$result = $this->insert_tools->choice();	
		foreach($result->result_array() as $insert)
			echo $insert["id"]." ".$insert["pw"]." ".$insert["name"]." ".$insert["gender"]." ".$insert["birthday"]."<br/>";
	}
	public function who() {
		$this->load->model("insert_tools");
		
		$result = $this->insert_tools->who($_POST["name"]);
		
		foreach($result->result_array() as $insert)
			echo $insert["pw"]." ".$insert["id"]." ".$insert["name"]." ".$insert["gender"]." ".$insert["birthday"]."<br/>";
	}
}
?>