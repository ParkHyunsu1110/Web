<? if ( ! defined('BASEPATH') ) exit('No direct script access allowed');
class Insert_tools extends CI_Model{
	public function set_insert($id, $pw, $name, $gender, $birthday){
		$insert = array(
			"id"=>$id,
			"pw"=>$pw,
			"name"=>$name,
			"gender"=>$gender,
			"birthday"=>$birthday
		);
		$this->db->insert("sql_practice", $insert);
	}
	public function set_ascending() {
		$this->db->select("*");
		
		$this->db->order_by("birthday","asc");
		
		return $this->db->get("sql_practice");
	}
	public function choice() {
		$this->db->select("*");
		
		$this->db->where("name","홍길동");
		
		return $this->db->get("sql_practice");
	}
	public function who($name) {
		$this->db->select("*");
		
		$this->db->where("name",$name);
		
		return $this->db->get("sql_practice");
	}
}
?>