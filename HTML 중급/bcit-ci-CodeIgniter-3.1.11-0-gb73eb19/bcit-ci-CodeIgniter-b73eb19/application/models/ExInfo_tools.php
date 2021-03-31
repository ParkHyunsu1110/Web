<? if(! defined('BASEPATH')) exit('No direct script access allowed');
Class ExInfo_tools extends CI_Model{
	public function set_by_ExInfo($id,$pw,$name,$gender,$birthday){
		$info = array(
			"id"=>$id,
			"pw"=>$pw,
			"name"=>$name,
			"gender"=>$gender,
			"birthday"=>$birthday
		);
		return $this->db->insert('sql_practice',$info);
	}
	public function get_by_Ex2 (){
		$this->db->select("*");
		$this->db->order_by('birthday','asc');
		return $this->db->get("sql_practice");
	}
}
?>