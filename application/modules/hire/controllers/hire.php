<?php if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class hire extends MY_Controller{

	function index(){

		$data['content_view'] = "hire/hire_v";
		$data['title'] = "Hire Us";
		
		$data = array_merge($data,$this->load_libraries(array()));

		$this->load->library('Googlemaps');

		$config['center'] = '-1.204231, 36.915952';
		$config['zoom'] = '18';
		$this->googlemaps->initialize($config);

		$marker = array();
		$marker['position'] = '-1.204231, 36.915952';
		$this->googlemaps->add_marker($marker);
		$data['map'] = $this->googlemaps->create_map();

		$data['mobile']=$data['map'];

		//print_r($data['mobile']);die;

		$this->template($data);

	}

}

?>