<? if(! defined('BASEPATH')) exit('No direct script access allowed');
class Model_tools extends CI_Model{
	public function get_by_test( $post_value ){
		$this->db->select("id,pw");
		
		$this->db->where("id",$post_value);
		
		return $this->db->get("sql_practice");
	}
}
?>