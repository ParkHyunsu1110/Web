<? if( ! defined('BASEPATH') ) exit ('No direct script access allowed');

class Ex_Controller extends CI_Controller{

	public function view_test(){
		$data = array(
			"a" => "hi",
			"b" => "hello"
		);
		
		$this->load->view("ex_view", $data);
	}
	public function arg_test( $a,$b,$c,$d ){
		echo $a = urldecode($a);
		echo $b = urldecode($b);
		echo $c = urldecode($c);
		echo $d = urldecode($d);
	}
}
?>