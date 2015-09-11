<?php

class food extends MY_Controller{

	function index(){

		$data['content_view'] = "food/food_v";
		$data['title'] = "Menu";
		
		$data = array_merge($data,$this->load_libraries(array('angular-js','restangular-js')));

		$this->template($data);

	}

	function get_food_items(){
		$this->load->model('food_m');

		$the_food=$this->food_m->get_food();

		$this->output->set_content_type('application/json')->set_output(json_encode($the_food,JSON_PRETTY_PRINT));
	}

}
?>