<? if(! defined('BASEPATH')) exit('No direct script access allowed');
Class Test extends CI_Controller{
	public function form(){
		$this->load->view("form");
	}
	public function process_post_data(){
		$this->load->model("model_tools");
		
		$result=$this->model_tools->get_by_test( $_POST["name"]);
		
		foreach($result->result_array() as $row){
			echo $row["id"]." ".$row["pw"]."<br>";
		}
	}
}
?>