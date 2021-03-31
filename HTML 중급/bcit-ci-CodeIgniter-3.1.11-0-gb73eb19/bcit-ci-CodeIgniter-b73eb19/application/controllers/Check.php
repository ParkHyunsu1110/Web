<? if(! defined('BASEPATH')) exit('No direct script access allowed');
Class Check extends CI_Controller{
	public function cform(){
		$this->load->view("cform");
	}
	public function process_post_data(){
		$this->load->model("check_tools");	//model의 check_tools을 불러옴
		
		$result=$this->check_tools->get_by_Check( $_POST["id"]); //$결과 = post형식으로 받아온 인자를 check_tools의 get_by_Check로 넘김
		
		foreach($result->result_array() as $row){
			echo $row['name']."<br>";
		}
	}
}
?>