<? if( ! defined('BASEPATH') ) exit ('No direct script access allowed');
Class Server extends CI_Controller{
	public function form (){
		$this->load->view("server");
	}
	public function order(){
		//--------상품명
		$obj = rtrim($_POST["obj_name"]);
		if(strlen($obj)<1){
			echo "상품 이름 미기입<br/>";
			return false;
		}
		else 
			echo "상품 이름 기입<br/>";
		//--------주문 수량
		if(0<$_POST["count"] && $_POST["count"]<6)
			echo "주문 수량 확인<br/>";
		else{
			echo "주문 수량 미확인<br/>";
			return false;
		}
		//--------이름
		if(isset($_POST["name"])){
			echo "이름 기입<br/>";
			if(strlen($_POST["name"]>10 && 2>$_POST["name"])){
				echo "이름 길이 비정상<br/>";
				return false;
			}
			else
				echo "이름 길이 정상<br/>";
		}
		else{
			echo "이름 미기입<br/>";
			return false;
		}
		//--------이메일
		if(strpos($_POST["email"],"@"))
			echo "이메일 형식 정상<br/>";
		else{
			echo "이메일 형식 비정상<br/>";
			return false;
		}
		//--------주소
		if(isset($_POST["address"])){
			echo "주소 기입<br/>";
			if(strlen($_POST["address"]<10)){
				echo "주소 길이 비정상<br/>";
				return false;
			}
			else
				echo "주소 길이 정상<br/>";
		}
		else{
			echo "주소 미기입<br/>";
			return false;
		}
	}
}
?>