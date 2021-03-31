<? if(! defined('BASEPATH')) exit('Nodirect script access allowed');
Class Check_tools extends CI_Model{
	public function get_by_Check( $post_value){
		$this->db->select("name");
		
		$this->db->where("id",$post_value);
		
		return $this->db->get("membership");
		//select name from membership where id=$post_value;
	}
}
?>