<? if(! defined('BASEPATH')) exit('No direct script access allowed');
Class Html5_validation_tools extends CI_Model {
	public function receive($id){
		$this->db->select("*");
		$this->db->where("id",$id);
		return $this->db->get("temporary_table");
	}
}
?>