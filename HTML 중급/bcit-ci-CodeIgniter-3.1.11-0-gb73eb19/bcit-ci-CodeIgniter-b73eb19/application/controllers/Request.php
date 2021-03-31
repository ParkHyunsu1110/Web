<? if(! defined('BASEPATH')) exit('No direct script access allowed');
Class Request extends CI_Controller{
	public function rform(){
		$this->load->view("rform");		//view 파일의 rform에서 로드 됨
	}
	public function process_add_data(){
		$this->load->model("request_tools");	//model 파일의 request_tools를 불러옴
		
		$this->request_tools->set_by_request( $_POST["name"],$_POST["id"],$_POST["pw"],$_POST["gender"],$_POST["birthday"]);	//post형식으로 입력 받은 것 들을 request_tools의 set_by_request로 보냄 
	}
	public function process_fix_data(){
		$this->load->model("request_tools");
		$this->request_tools->fix_by_request($_POST["id"],$_POST["pw"]);
	}
	public function process_del_data(){
		$this->load->model("request_tools");
		$this->request_tools->del_by_request($_POST["id"]);
	}
}
?>