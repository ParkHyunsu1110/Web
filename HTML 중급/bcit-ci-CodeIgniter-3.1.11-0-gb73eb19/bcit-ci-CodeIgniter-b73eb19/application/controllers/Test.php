<? defined('BASEPATH') or exit ('no direct script access allowed');
class Test extends CI_Controller{
	public function a(){
		echo "a";
	}
	public function b(){
		echo "b";
	}
	public function view(){
		$this->load->view("test_view");
	}
	public function index(){
		$this->load->model("model_tools");
		$result = $this->model_tools->get_test();
		
		foreach($result->result_array() as $row){
			echo $row["칼럼1"]." ".$row["칼럼2"]."<br>";
		}
	}
}
?>