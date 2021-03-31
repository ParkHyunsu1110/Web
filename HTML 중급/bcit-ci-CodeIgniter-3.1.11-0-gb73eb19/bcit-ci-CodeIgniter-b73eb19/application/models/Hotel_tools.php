<? if(! defined('BASEPATH')) exit('No direct script access allowed');
Class Hotel_tools extends CI_Model{
	public function hotel_log_Info(){
		$this->db->select("id, pw");	//$this->db->select("*");여도 전혀 상관없음.
		
		$this->db->where("id", $_POST["id"]);
		$this->db->where("pw", $_POST["pw"]);
		$result = $this->db->get("hotel");

		if ( $result->num_rows() == 0 ) return false;
		else return true;
		
	}
	public function hotel_join_Info($name,$id,$pw,$phone,$address,$mail,$gender,$birthday){
		$join_info = array(
			"name"=>$name,
			"id"=>$id,
			"pw"=>$pw,
			"phone"=>$phone,
			"address"=>$address,
			"mail"=>$mail,
			"gender"=>$gender,
			"birthday"=>$birthday
		);
		return $this->db->insert('hotel',$join_info);
		
	}
	public function search_id(){
		$this->db->select("id");
		
		$this->db->where("id",$_POST["id"]);
		
		$result = $this->db->get("hotel");

		if ( $result->num_rows() == 0 ) return false;
		else return true;
	}
}
?>