<? if(! defined('BASEPATH')) exit('No direct script access allowed');
Class Jeju extends CI_Controller{
	//메인
	public function jeju_main() {
		$this->load->view("jeju_main");
	}
	
	//소개
	public function jeju_introduce () {
		$this->load->view("jeju_introduce");
	}
	
	//제주
	public function jeju_jeju () {
		$this->load->view("jeju_jeju");
	}
	public function jeju_hanra (){
		if(isset($_SESSION["log_check"])) $this->load->view("jeju_hanra");
		else echo "<script> alert('세션 정보가 없습니다. 로그인 후 이용해 주세요.'); document.location.href='http://qkrgustn.com/jeju/jeju_main';</script>";
	}	
	public function jeju_dragon (){
		if(isset($_SESSION["log_check"])) $this->load->view("jeju_dragon");
		else echo "<script> alert('세션 정보가 없습니다. 로그인 후 이용해 주세요.'); document.location.href='http://qkrgustn.com/jeju/jeju_main';</script>";
	}	
	public function jeju_jeolmul (){
		if(isset($_SESSION["log_check"])) $this->load->view("jeju_jeolmul");
		else echo "<script> alert('세션 정보가 없습니다. 로그인 후 이용해 주세요.'); document.location.href='http://qkrgustn.com/jeju/jeju_main';</script>";	
	}
	
	//서귀포
	public function jeju_seogwipo () {
		$this->load->view("jeju_seogwipo");
	}
	public function jeju_chun () {
		if(isset($_SESSION["log_check"])) $this->load->view("jeju_chun");
		else echo "<script> alert('세션 정보가 없습니다. 로그인 후 이용해 주세요.'); document.location.href='http://qkrgustn.com/jeju/jeju_main';</script>";		
	}
	public function jeju_soi () {
		if(isset($_SESSION["log_check"])) $this->load->view("jeju_soi");
		else echo "<script> alert('세션 정보가 없습니다. 로그인 후 이용해 주세요.'); document.location.href='http://qkrgustn.com/jeju/jeju_main';</script>";		
	}
	public function jeju_oi () {
		if(isset($_SESSION["log_check"])) $this->load->view("jeju_oi");
		else echo "<script> alert('세션 정보가 없습니다. 로그인 후 이용해 주세요.'); document.location.href='http://qkrgustn.com/jeju/jeju_main';</script>";		
	}
	
	//로그인
	public function jeju_login () {
		$this->load->view("jeju_login");
	}	
	public function log_add_data(){			//로그인+tools
		$this->load->model("jeju_tools");
		$this->load->library("form_validation");
		$this->form_validation->set_rules("id","아이디","required");
		$this->form_validation->set_rules("pw","비밀번호","required|min_length[6]");
			
		if( $this->form_validation->run() ) {
			echo "정확하게 입력했습니다.";
		} else {
			echo "적합하지 않은 입력이 있습니다.";
		}
		if($this->jeju_tools->jeju_login_info($_POST["id"],$_POST["pw"])){
			$this->session->set_userdata("log_check",$_POST["id"]);
			echo "<script> alert('로그인에 성공하셨습니다.');document.location.href='http://qkrgustn.com/jeju/jeju_main';</script>";
		}
		else echo "<script> alert('로그인에 실패하셨습니다.');document.location.href='http://qkrgustn.com/jeju/jeju_main';</script>";
	}
	
	//로그아웃
	public function jeju_logout () {
		unset($_SESSION["log_check"]);	//세션 정보 없애는 소스
											//unset 실행 후 alert나타나서 "로그아웃 되셨습니다."
		echo "<script> alert('로그아웃 되셨습니다.'); document.location.href='http://qkrgustn.com/jeju/jeju_main';</script>";
	}
	
	//회원가입
	public function jeju_join () {
		$this->load->view("jeju_join");
	}
	public function join_add_data(){		//회원가입+tools
		$this->load->model("Jeju_tools");
		
		$this->load->library("form_validation");
		
		$this->form_validation->set_rules("name","이름","required|max_length[5]|min_length[2]");
		$this->form_validation->set_rules("id","아이디","required|min_length[6]");
		$this->form_validation->set_rules("pw","비밀번호","required|min_length[6]");
		$this->form_validation->set_rules("address","주소","required|min_length[10]|max_length[50]");
		$this->form_validation->set_rules("tel","전화번호","numeric|required|min_length[12]|max_length[13]");
		$this->form_validation->set_rules("gender","성별","required|in_list[남,여]");
		$this->form_validation->set_rules("birth","생일","required|numeric");
			
		if( $this->form_validation->run() ) {
			echo "정확하게 입력했습니다.";
		} else {
			echo "적합하지 않은 입력이 있습니다.";
		}
		
		if($this->Jeju_tools->jeju_join_info($_POST["name"],$_POST["id"],$_POST["pw"],$_POST["tel"],$_POST["address"],$_POST["email"],$_POST["gender"],$_POST["birthday"]))
			echo "<script> alert('회원가입에 성공하셨습니다.'); document.location.href='http://qkrgustn.com/jeju/jeju_main';</script>";	
		else
			echo "<script> alert('회원가입에 실패하셨습니다.'); document.location.href='http://qkrgustn.com/jeju/jeju_main';</script>";
	}
	//아이디 검색
	public function search_id(){
		$this->load->model("jeju_tools");
		if($this->jeju_tools->search_id($_POST["id"]))
			echo "<script> alert('사용 중인 아이디입니다.'); document.location.href='http://qkrgustn.com/jeju/jeju_main';</script>";
		else
			echo "<script> alert('사용 가능한 아이디입니다.'); document.location.href='http://qkrgustn.com/jeju/jeju_main';</script>";
	}
}
?>