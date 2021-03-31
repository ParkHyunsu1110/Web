<? if(! defined('BASEPATH')) exit('No direct script access allowed');
Class Request_tools extends CI_Model{
	public function set_by_request($name, $id, $pw, $gender,$birthday){	//함수명(인자들){
		$row = array(		//$배열 형태로 인자 받기
			"name"=>$name,
			"id"=>$id,
			"pw"=>$pw,
			"gender"=>$gender,
			"birthday"=>$birthday
		);
		$this->db->insert('membership',$row);	//입력(테이블 명, 배열 명);, insert는 이미 있는 함수, 함수명이나 파일명으로 사용하지 말것.
	}
	public function fix_by_request($id, $pw){
		$fix = array(
				"id"=>$id,
				"pw"=>$pw
			);
			$this->db->where("id",$id);
			$this->db->update('membership',$fix);
	}
	public function del_by_request($id){
		$this->db->where('id',$id);
		$this->db->delete('membership');
	}
}
?>