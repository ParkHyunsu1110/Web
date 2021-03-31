<? if(! defined('BASEPATH')) exit('No direct script access allowed');
Class Hd extends CI_Controller{
	public function hd_form(){				//메인화면
		$this->load->view("hd");
	}
	
	public function hd_food(){				//음식
		$this->load->view("hd_food");
	}
	public function hd_meat(){				//육류
		$this->load->view("hd_meat");
	}
	public function hd_seafood(){			//해산물
		$this->load->view("hd_seafood");
	}
	public function hd_vegetable(){			//채소류
		$this->load->view("hd_vegetable");
	}
	public function hd_life(){				//생활용품
		$this->load->view("hd_life");
	}
	public function hd_car(){				//차량용품
		$this->load->view("hd_car");
	}
	public function hd_digital(){			//전자기기
		$this->load->view("hd_digital");
	}
	public function hd_sport(){				//운동용품
		$this->load->view("hd_sport");
	}
	public function hd_csc(){				//고객센터	
		if(isset($_SESSION["login_check"]))
			$this->load->view("hd_csc");
		else echo "<script> alert('세션 정보가 없습니다. 로그인 후 이용해 주세요.'); document.location.href='http://qkrgustn.com/hd/hd_form';</script>";
	}
	public function hd_sb (){				//장바구니
		if(isset($_SESSION["login_check"]))
			$this->load->view("hd_sb");
		else echo "<script> alert('세션 정보가 없습니다. 로그인 후 이용해 주세요.'); document.location.href='http://qkrgustn.com/hd/hd_form';</script>";
	}
	public function hd_login(){	//로그인
		$this->load->view("hd_login");
	}
	public function log_add_data(){			//로그인+tools
		$this->load->model("hd_tools");
		$this->load->library("form_validation");
		$this->form_validation->set_rules("id","아이디","required");
		$this->form_validation->set_rules("pw","비밀번호","required|min_length[6]");
			
		if( $this->form_validation->run() ) {
			echo "정확하게 입력했습니다.";
		} else {
			echo "적합하지 않은 입력이 있습니다.";
		}
		if($this->hd_tools->hd_login_info($_POST["id"],$_POST["pw"])){
			$this->session->set_userdata("login_check",$_POST["id"]);
			echo "<script> alert('로그인에 성공하셨습니다.');document.location.href='http://qkrgustn.com/hd/hd_form';</script>";
		}
		else echo "<script> alert('로그인에 실패하셨습니다.');document.location.href='http://qkrgustn.com/hd/hd_form';</script>";
	
	}
	public function hd_join(){				//회원가입
		$this->load->view("hd_join");
	}
	public function join_add_data(){		//회원가입+tools
		$this->load->model("hd_tools");
		
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
		
		if($this->hd_tools->hd_join_info($_POST["name"],$_POST["id"],$_POST["pw"],$_POST["tel"],$_POST["address"],$_POST["email"],$_POST["gender"],$_POST["birthday"]))
			echo "<script> alert('회원가입에 성공하셨습니다.'); document.location.href='http://qkrgustn.com/hd/hd_form';</script>";	
		else
			echo "<script> alert('회원가입에 실패하셨습니다.'); document.location.href='http://qkrgustn.com/hd/hd_form';</script>";
	
	}
	public function hd_overlap(){			//아이디 중복 확인
		$this->load->model("hd_tools");
		if($this->hd_tools->hd_overlap($_POST["id"]))
			echo "<script> alert('ID : '".$_POST["id"]."'는 사용 중인 아이디입니다.'); document.location.href='http://qkrgustn.com/hd/hd_form';</script>";
		else
			echo "<script> alert('사용 가능한 아이디입니다.'); document.location.href='http://qkrgustn.com/hd/hd_form';</script>";
	}
	public function hd_search(){			//아이디 비밀번호 찾기
		$this->load->view("hd_search");
	}
	public function search_id(){
		$this->load->model("hd_tools");
		if($this->hd_tools->hd_search_id($_POST["name"], $_POST["tel"]))
			echo "<script> alert('고객님의 ID는'".$_POST["id"]."' 입니다.'); document.location.href='http://qkrgustn.com/hd/hd_form';</script>";
		else
			echo "<script> alert('정보를 다시 입력해 주세요.'); document.location.href='http://qkrgustn.com/hd/hd_form';</script>";
	}
	public function search_pw(){
		$this->load->model("hd_tools");
		if($this->hd_tools->hd_search_pw($_POST["name"], $_POST["id"]))
			echo "<script> alert('고객님의 PW는 '".$_POST["pw"]."' 입니다.'); document.location.href='http://qkrgustn.com/hd/hd_form';</script>";
		else
			echo "<script> alert('정보를 다시 입력해 주세요.'); document.location.href='http://qkrgustn.com/hd/hd_form';</script>";
	}
	public function logout(){				//로그아웃
		unset($_SESSION["login_check"]);	//세션 정보 없애는 소스
											//unset 실행 후 alert나타나서 "로그아웃 되셨습니다."
		echo "<script> alert('로그아웃 되셨습니다.'); document.location.href='http://qkrgustn.com/hd/hd_form';</script>";
	}
}
?>