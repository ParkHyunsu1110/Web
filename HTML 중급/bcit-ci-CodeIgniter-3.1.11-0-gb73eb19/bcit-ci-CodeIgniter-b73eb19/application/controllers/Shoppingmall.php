<? if(! defined('BASEPATH')) exit('No direct script access allowed');
Class Shoppingmall extends CI_Controller{
	public function shoppingmall_main(){
		$this->load->view("shoppingmall_main");
	}
	public function shoppingmall_storage(){
		if(isset($_SESSION["is_session"])) $this->load->view("shoppingmall_storage");
		else echo"<script>alert('세션정보가 없습니다. 로그인 후 다시 시도해 주세요.'); document.location.href='http://qkrgustn.com/shoppingmall/shoppingmall_main';</script>";
	}
	public function shoppingmall_login(){
		$this->load->view("shoppingmall_login");
	}
	public function shoppingmall_login_add(){
		$this->load->model("shoppingmall_tools");
		if($this->shoppingmall_tools->login_info($_POST["id"], $_POST["pw"])){ 
			$this->session->set_userdata("is_session",$_POST["id"]);
			echo "<script>alert('로그인에 성공하셨습니다.'); document.location.href='http://qkrgustn.com/shoppingmall/shoppingmall_main';</script>";
		}
		else echo "<script>alert('로그인에 실패하셨습니다.'); document.location.href='http://qkrgustn.com/shoppingmall/shoppingmall_main';</script>";
	}
	public function shoppingmall_join(){
		$this->load->view("shoppingmall_join");
	}
	public function shoppingmall_join_add(){
		$this->load->model("shoppingmall_tools");
		if($this->shoppingmall_tools->join_info($_POST["name"], $_POST["id"], $_POST["pw"])){ 
			echo "<script>alert('회원가입에 성공하셨습니다.'); document.location.href='http://qkrgustn.com/shoppingmall/shoppingmall_main';</script>";
		}
		else echo "<script>alert('회원가입에 실패하셨습니다.'); document.location.href='http://qkrgustn.com/shoppingmall/shoppingmall_main';</script>";
	}
	public function logout(){
		unset($_SESSION["is_session"]);
		echo "<script>alert('로그아웃 되셨습니다.'); document.location.href='http://qkrgustn.com/shoppingmall/shoppingmall_main';</script>";
	}
	public function id_check(){
		$this->load->model("shoppingmall_tools");
		if($this->shoppingmall_tools->id_check($_POST["id"])){ 
			echo "<script>alert('사용할 수 있는 아이디입니다.'); document.location.href='http://qkrgustn.com/shoppingmall/shoppingmall_main';</script>";
		}
		else echo "<script>alert('보유중인 아이디입니다.'); document.location.href='http://qkrgustn.com/shoppingmall/shoppingmall_main';</script>";
	}
}
?>