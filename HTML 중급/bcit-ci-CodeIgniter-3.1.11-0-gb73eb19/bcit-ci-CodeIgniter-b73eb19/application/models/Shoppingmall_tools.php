<? if(! defined('BASEPATH')) exit('No direct script access allowed');
Class Shoppingmall_tools extends CI_Model{
	public function join_info($name, $id, $pw){
		$information=array(
			"name"=>$name,
			"id"=>$id,
			"pw"=>$pw
		);
		return $this->db->insert('shoppingmall_db',$information);
	}
	public function login_info(){
		$this->db->select("*");
		$this->db->where("id",$_POST["id"]);
		$this->db->where("pw",$_POST["pw"]);
		$result = $this->db->get('shoppingmall_db');
		
		if($result->num_rows() == 0) return false;
		else return true;
	}
	public function id_check(){
		$this->db->select("id");
		$this->db->where("id",$_POST["id"]);
		$result = $this->db->get('shoppingmall_db');
		
		if($result->num_rows() == 0) return true;
		else return false;
	}
}
?>