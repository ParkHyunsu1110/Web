<? if(! defined('BASEPATH')) exit('No direct script access allowed');
Class Html5_tools extends CI_Model{
	public function receive_array($name,$id,$pw){
		$info = array(
			"name"=>$name,
			"id"=>$id,
			"pw"=>$pw
		);
		$this->db->insert('html5',$info);
	}
	public function receive($name,$id,$pw){
		$this->db->select("*");
		$this->db->where("name",$name);
		$this->db->where("id",$id);
		$this->db->where("pw",$pw);
		return $this->db->get("html5");
	}
}
?>