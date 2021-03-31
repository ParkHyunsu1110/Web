<? if( ! defined('BASEPATH') ) exit ('No direct script access allowed');
Class Server_tools extends CI_Model{
	public function receive($obj_name, $count, $name, $email, $address){
		$this->db->select("*");
		$this->db->where("email",$email);
		return $this->db->get("order_table");
	}
}
?>