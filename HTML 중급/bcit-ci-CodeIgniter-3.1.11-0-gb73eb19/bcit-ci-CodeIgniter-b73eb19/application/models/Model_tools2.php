<? if ( ! defined('BASEPATH') ) exit('No direct script access allowed');
 
//application/models/Model_tools.php
 
class Model_tools extends CI_Model {
 
 public function get_by_test( $post_value )
 {
  $this->db->select( "칼럼1, 칼럼2");
  
  $this->db->where( "칼럼1", $post_value );
  
  return $this->db->get( "테이블명" );
 }
}
?>