<?php if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class gallery extends MY_Controller{

	public function index(){
		$this->gallery_page();
	}

	function gallery_page(){

		$data['content_view'] = "gallery/gallery_v";
		$data['title'] = "Events Gallery";
		
		$data = array_merge($data,$this->load_libraries(array('lightgallery')));

		$this->template($data);

		//$this->load->view('gallery_v');
	}


}
?>