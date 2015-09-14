<script type="text/javascript" src="<?php echo base_url() ?>scripts/app.js"></script>			
<script type="text/javascript" src="<?php echo base_url() ?>scripts/controllers/foodCtrl.js"></script>
<script src="http://localhost/Kabrina/scripts/config/restangularCFG.js"></script>

<style type="text/css">
	#food_content_comp{
		margin-left:130px;
		width:79%;
	}
.ui.grid > .row > [class*="two wide"].column, .ui.grid > .column.row > [class*="two wide"].column, .ui.grid > [class*="two wide"].column, .ui.column.grid > [class*="two wide"].column {
    width: 22.5% !important;
}
</style>

<div ng-app="myApp">
	<div ng-controller="foodCtrl">
			<div class="ui segment" >
				<h2 class="ui centered header">Some Of Our Food</h2> <h4 class="ui centered header">Click the icon below to download Our Menu</h4>
				<a href="#">
					<img class="ui centered tiny image" src="<?php echo base_url()?>assets/img/menu2.png" title="Click To Download Our Full Menu"/>
				</a>
			</div>
			<div class="ui segment" ng-repeat="food in Items" >
					<h2 style="color:#1C7D33;"class="ui header">{{ food.Category }}</h2>
					<div class="ui grid">
						<div class="computer tablet only row"> <!--  comps,laptops & tablet -->
								
				 			<div class="two wide column" ng-repeat="Items in food.Item" style="height:70px;margin-left:130px;">
				 				<!-- <img style="left:85px;"class="ui centered avatar small image" src="<?php //echo base_url() ?>assets/img/{{Items.Image}}">-->
				 				<div class="ui small header">{{ Items.Food }} <br />50</div>
				 			</div>
				    	</div>
				    	<div class="mobile only row"> <!-- mobile devices only -->
				 			<div class="four wide column" ng-repeat="Items in food.Item" style="height:100px;">
				 				<!-- <img class="ui centered avatar small image" src="<?php //echo base_url() ?>assets/img/{{Items.Image}}"> -->
				 				<div class="ui centered small header">{{ Items.Food }}</div>
				 			</div>
				    	</div>
					</div>
			</div>
				 			


	</div>  <!-- controller -->
</div>	<!-- app -->
