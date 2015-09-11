<?php

class about extends MY_Controller{

	function index(){

		$data['content_view'] = "about/about_v";
		$data['title'] = "About Us";
		
		$data = array_merge($data,$this->load_libraries(array()));

		$this->template($data);

	}
}
?>