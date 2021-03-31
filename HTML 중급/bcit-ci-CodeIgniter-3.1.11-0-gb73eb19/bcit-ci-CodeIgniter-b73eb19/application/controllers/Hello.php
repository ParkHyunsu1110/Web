<? if( ! defined('BASEPATH') ) exit ('No direct script access allowed');
Class Hello extends CI_Controller{
	public function form (){
		$this->load->view("hello");
	}
}
?>