<? if ( ! defined('BASEPATH') ) exit('No direct script access allowed');
Class PochangMon_tools extends CI_Model{
	public function pochangmon_capture($name, $date){
		$catch = array(
			"name"=>$name,
			"date"=>$date
		);		
		$this->db->select("name");		
		$this->db->where("name",$_POST["name"]);		
		$result = $this->db->get("pochangmon");		
		if ( $result->num_rows() == 0 ) return $this->db->insert('pochangmon',$catch);
		else return false;
	}
	public function pochangmon_call($name){
		$this->db->select("*");
		$this->db->where("name",$name);	
		$result = $this->db->get("pochangmon");
		if ( $result->num_rows() == 0 ) return false;
		else return $result;
	}
}
?>
