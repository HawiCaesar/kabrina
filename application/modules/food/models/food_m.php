<?php

class food_m extends CI_Model{

	function get_food(){

		$food_array=array(
						array(	'Category' 	=> 'Main Courses',
						  	 	'Item'    	=> array(
						  	 							array('Food' => 'Traditional Beef Stew','Image' => 'main.jpg'),
						  	 							array('Food' => 'Mini Steaks','Image' => 'main.jpg'),
						  	 							array('Food' => 'Deep Fried Chicken','Image' => 'main.jpg'),
						  	 							array('Food' => 'Oven Baked Chicken','Image' => 'main.jpg'),
						  	 							array('Food' => 'Mixed Vegetable Stew With Beef','Image' => 'main.jpg'),
						  	 							array('Food' => 'Deep Fried Fish Fillet','Image' => 'main.jpg'),
						  	 							array('Food' => 'Mixed Vegetable Stew With Chicken','Image' => 'main.jpg'),
						  	 							array('Food' => 'Mushroom Steak With Rice','Image' => 'main.jpg'),
						  	 						),

						  	),
						array(
								'Category' 	=> 'Starch',
						  	  	'Item' 		=> array(	
						  	  							array('Food' => 'Vegetable Rice/ Tumeric Rice', 'Image' => 'starch.jpg'),
														array('Food' => 'Plain Pliau Rice', 'Image' => 'starch.jpg'),
														array('Food' => 'Chapati(Brown or White)', 'Image' => 'starch.jpg'),
														array('Food' => 'Mashed Potatoes', 'Image' => 'starch.jpg'),
														array('Food' => 'Mukimo', 'Image' => 'starch.jpg'),
														array('Food' => 'Parsely Potatoes', 'Image' => 'starch.jpg'),
														array('Food' => 'Mashed Potatoes', 'Image' => 'starch.jpg'),
														array('Food' => 'Vegetable Rice/ Tumeric Rice', 'Image' => 'starch.jpg')
													)
							),
						array(
								'Category' 	=> 'Salads',
						  	  	'Item' 		=> array(	
						  	  							array('Food' => 'Coleslaw', 'Image' => 'salads.jpg'),
														array('Food' => 'Kachumbari', 'Image' => 'salads.jpg'),
														array('Food' => 'Mixed Vegetables Salad', 'Image' => 'salads.jpg'),
														array('Food' => 'Carrot Raisins Salad', 'Image' => 'salads.jpg'),
														array('Food' => 'Red Cabbage With Pineapple Salad', 'Image' => 'salads.jpg'),
														array('Food' => 'Mixed Vegetables Salad', 'Image' => 'salads.jpg'),
														array('Food' => 'Carrot Raisins Salad', 'Image' => 'salads.jpg'),
														array('Food' => 'Red Cabbage With Pineapple Salad', 'Image' => 'salads.jpg')
													)
							)
						);

		return $food_array;
	}


}
?>