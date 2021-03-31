<? if ( ! defined('BASEPATH') ) exit('No direct script access allowed');
class Model_tools extends CI_Model {
	public function get_test(){
		$this->db->select("no, age");
		$this->db->where("no",1);
		return $this->db->get("test_table");
	}
}