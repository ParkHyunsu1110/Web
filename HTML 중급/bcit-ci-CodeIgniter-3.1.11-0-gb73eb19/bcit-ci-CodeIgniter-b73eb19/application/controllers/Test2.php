<? if ( ! defined('BASEPATH') ) exit ('No direct script access allowed');
 
//application/controllers/Test.php
 
class Test extends CI_Controller {
 
 public function form()
 {
  //form을 출력하기 위한 메소드
  //$this->load->view( "form");
 } 
 
 public function process_post_data()
 {
  //application/views/form.php로부터 전송된 데이터를 처리하기 위한 메소드
 /* $this->load->model( "model_tools" );
  
  $result = $this->model_tools->get_by_test( $_POST["name"] );
  foreach ( $result->result_array() as $row ){
   echo $row[ "칼럼1" ]." ".$row[ "칼럼2" ]."<br>"; 
  }*/
 }
  public function view_ex(){
	$result = array(
	"name" => "박현수",
	"age" => "22",
 	"grade" => "3"
   );
   $this->load->view( "form_ex", $result);
  }
} 
 
?>