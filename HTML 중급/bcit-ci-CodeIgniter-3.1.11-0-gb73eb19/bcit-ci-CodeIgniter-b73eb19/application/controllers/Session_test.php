<? if( ! defined('BASEPATH') ) exit ('No direct script access allowed');
Class Session_test extends CI_Controller{
	public function session_storage(){
		$this->session->set_userdata("login_whether","구구구가가가가각");	
	}
	public function login_check(){
		if(isset($_SESSION["login_whether"])){
			echo $_SESSION["login_whether"]."님 반갑습니다.";
		}
		else{
			echo "<script> alert('세션 정보가 없습니다. 로그인 후 이용해 주세요.'); document.location.href='http://qkrgustn.com/hotel/hotel_main';</script>";
		}
	}
}
?>