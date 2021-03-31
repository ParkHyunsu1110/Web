<? if(! defined('BASEPATH')) exit('No direct script access allowed');
Class Hotel extends CI_Controller{
	/*메인페이지*/
	public function hotel_main(){
		$this->load->view("hotel_main");
	}
	/*인포메이션*/
	public function hotel_info() {
		echo "<script> alert('세션 정보가 없습니다. 로그인 후 이용해 주세요.'); document.location.href='http://qkrgustn.com/hotel/hotel_main';</script>";
		$this->load->view("hotel_info");
	}
	/*룸*/
	public function hotel_room() {
		if(isset($_SESSION["login_check"])) $this->load->view("hotel_room");
		else echo "<script> alert('세션 정보가 없습니다. 로그인 후 이용해 주세요.'); document.location.href='http://qkrgustn.com/hotel/hotel_main';</script>";
	}
	//슈페리얼
	public function hotel_superior() {
		if(isset($_SESSION["login_check"])) $this->load->view("hotel_superior");
		else echo "<script> alert('세션 정보가 없습니다. 로그인 후 이용해 주세요.'); document.location.href='http://qkrgustn.com/hotel/hotel_main';</script>";	
	}
	//스위트룸-디럭스
	public function hotel_suite() {
		if(isset($_SESSION["login_check"])) $this->load->view("hotel_suite");
		else echo "<script> alert('세션 정보가 없습니다. 로그인 후 이용해 주세요.'); document.location.href='http://qkrgustn.com/hotel/hotel_main';</script>";
	}
	//스위트룸-이그제큐티브
	public function hotel_suite_executive() {
		if(isset($_SESSION["login_check"])) $this->load->view("hotel_suite_executive");
		else echo "<script> alert('세션 정보가 없습니다. 로그인 후 이용해 주세요.'); document.location.href='http://qkrgustn.com/hotel/hotel_main';</script>";		
	}
	//스위트룸-오션/실버
	public function hotel_suite_ocean() {
		if(isset($_SESSION["login_check"])) $this->load->view("hotel_suite_ocean");
		else echo "<script> alert('세션 정보가 없습니다. 로그인 후 이용해 주세요.'); document.location.href='http://qkrgustn.com/hotel/hotel_main';</script>";		
	}
	//스위트룸-프레지덴셜/로얄
	public function hotel_suite_presidential() {
		if(isset($_SESSION["login_check"])) $this->load->view("hotel_suite_presidential");
		else echo "<script> alert('세션 정보가 없습니다. 로그인 후 이용해 주세요.'); document.location.href='http://qkrgustn.com/hotel/hotel_main';</script>";
	}
	/*웨딩*/
	public function hotel_wedding() {
		if(isset($_SESSION["login_check"])) $this->load->view("hotel_wedding");
		else echo "<script> alert('세션 정보가 없습니다. 로그인 후 이용해 주세요.'); document.location.href='http://qkrgustn.com/hotel/hotel_main';</script>";		
	}
	/*시설*/
	public function hotel_facility(){
		if(isset($_SESSION["login_check"])) $this->load->view("hotel_facility");
		else echo "<script> alert('세션 정보가 없습니다. 로그인 후 이용해 주세요.'); document.location.href='http://qkrgustn.com/hotel/hotel_main';</script>";	
	}
	/*여행*/
	public function hotel_trip() {
		if(isset($_SESSION["login_check"])) $this->load->view("hotel_trip");
		else echo "<script> alert('세션 정보가 없습니다. 로그인 후 이용해 주세요.'); document.location.href='http://qkrgustn.com/hotel/hotel_main';</script>";		
	}
	/*로그인&회원가입*/
	public function hotel_login() {
		$this->load->view("hotel_login");
	}
	public function hotel_join() {
		$this->load->view("hotel_join");
	}
	public function log_add_data(){
		$this->load->model("hotel_tools");
		if($this->hotel_tools->hotel_log_Info($_POST["id"],$_POST["pw"])){
			$this->session->set_userdata("login_check",$_POST["id"]);
			echo "<script> alert('로그인에 성공하셨습니다.');document.location.href='http://qkrgustn.com/hotel/hotel_main';</script>";
		}
		else echo "<script> alert('로그인에 실패하셨습니다.');document.location.href='http://qkrgustn.com/hotel/hotel_main';</script>";
	}
	public function log_out() {
		unset($_SESSION["login_check"]);	//세션 정보 없애는 소스
											//unset 실행 후 alert나타나서 "로그아웃 되셨습니다."
		echo "<script> alert('로그아웃 되셨습니다.'); document.location.href='http://qkrgustn.com/hotel/hotel_main';</script>";
	}
	public function join_add_data(){
		$this->load->model("hotel_tools");
		
		if($this->hotel_tools->hotel_join_Info($_POST["name"],$_POST["id"],$_POST["pw"],$_POST["phone"],$_POST["address"],$_POST["mail"],$_POST["gender"],$_POST["birthday"]))
			echo "<script> alert('회원가입에 성공하셨습니다.'); document.location.href='http://qkrgustn.com/hotel/hotel_main';</script>";	
		else
			echo "<script> alert('회원가입에 실패하셨습니다.'); document.location.href='http://qkrgustn.com/hotel/hotel_main';</script>";
	}
	public function search_id(){
		$this->load->model("hotel_tools");
		if($this->hotel_tools->search_id($_POST["id"]))
			echo "<script> alert('사용 중인 아이디입니다.'); document.location.href='http://qkrgustn.com/hotel/hotel_main';</script>";
		else
			echo "<script> alert('사용 가능한 아이디입니다.'); document.location.href='http://qkrgustn.com/hotel/hotel_main';</script>";
	}
}
?>