<?php if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class reviews extends MY_Controller{

	public function index(){

		$this->reviews_page();
	}

	function reviews_page(){

		$data['content_view'] = "reviews/reviews_v";
		$data['title'] = "Reviews";
		
		$data = array_merge($data,$this->load_libraries(array()));

		$this->template($data);
	}
}

?>