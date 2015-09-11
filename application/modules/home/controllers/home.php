<?php

class home extends MY_Controller{

	function index(){

		$data['content_view'] = "home/home_view";
		$data['title'] = "Home";

		$data	=array_merge($data,$this->load_libraries(array('bx-slider')));

		$this->template($data);
	}

}

?>