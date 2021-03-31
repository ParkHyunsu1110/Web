<? if( ! defined('BASEPATH') ) exit ('No direct script access allowed');
Class Jeju_tools extends CI_Model{
	public function jeju_join_info($name,$id,$pw,$tel,$address,$email,$gender,$birthday){
		$jeju_info = array(
			"name"=>$name,
			"id"=>$id,
			"pw"=>$pw,
			"tel"=>$tel,
			"address"=>$address,
			"email"=>$email,
			"gender"=>$gender,
			"birthday"=>$birthday
		);
		
		return $this->db->insert('jeju',$jeju_info);
	}
	public function jeju_login_info(){
		$this->db->select("id, pw");	
		
		$this->db->where("id", $_POST["id"]);
		$this->db->where("pw", $_POST["pw"]);
		$result = $this->db->get("jeju");

		if ( $result->num_rows() == 0 ) return false;
		else return true;
	}
	public function search_id(){
		$this->db->select("id");		
		$this->db->where("id",$_POST["id"]);	
		$result = $this->db->get("jeju");

		if ( $result->num_rows() == 0 ) return false;
		else return true;
	}
}
?>