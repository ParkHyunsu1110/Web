<? if( ! defined('BASEPATH') ) exit ('No direct script access allowed');
Class Hd_tools extends CI_Model{
	public function hd_join_info($name,$id,$pw,$tel,$address,$email,$gender,$birthday){
		$hd_info = array(
			"name"=>$name,
			"id"=>$id,
			"pw"=>$pw,
			"tel"=>$tel,
			"address"=>$address,
			"email"=>$email,
			"gender"=>$gender,
			"birthday"=>$birthday
		);
		
		return $this->db->insert('hd',$hd_info);
	}
	public function hd_login_info(){
		$this->db->select("id, pw");	
		
		$this->db->where("id", $_POST["id"]);
		$this->db->where("pw", $_POST["pw"]);
		$result = $this->db->get("hd");

		if ( $result->num_rows() == 0 ) return false;
		else return true;
	}
	public function hd_overlap(){
		$this->db->select("id");		
		$this->db->where("id",$_POST["id"]);	
		$result = $this->db->get("hd");

		if ( $result->num_rows() == 0 ) return false;
		else return true;
	}
	/* public function hd_search_id($_POST["name"], $_POST["tel"]){
		$this->db->select("id");
		$this->db->where("name",$_POST["name"]);
		$this->db->where("tel",$_POST["tel"]);
		
		$result = $this->db->get("hd");

		if ( $result->num_rows() == 0 ) return false;
		else return true;
	} */
	/* public function hd_search_pw($_POST["name"], $_POST["id"]){
		$this->db->select("pw");
		
		$this->db->where("name",$_POST["name"]);
		$this->db->where("id",$_POST["id"]);
		
		$result = $this->db->get("hd");

		if ( $result->num_rows() == 0 ) return false;
		else return true;
	} */
}
?>