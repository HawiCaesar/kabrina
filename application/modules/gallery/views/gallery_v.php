<style type="text/css">
	
	/*#content_segment{
    box-shadow: 0px 0px 0px 0 rgba(34, 36, 38, 0.15);
    margin: 0rem 0em;
    padding: 1em 1em;
    border-radius: 0.28571429rem;
    border: 0px;
}*/
</style>
<div style="width:79%;margin-left:10%;">
	<div class="ui segment"><h2 class="ui centered header"> Some Of Our Events </h2></div>

	<div class="ui center aligned segment" id="content_segment">
		<div id="lightgallery">
		  <a href="<?php echo base_url() ?>assets/img/kcafe.jpg">
		      <img src="<?php echo base_url() ?>assets/img/kcafe.jpg" style="width:200px;height:auto" />
		  </a>
		  <a href="<?php echo base_url() ?>assets/img/kcafe2.jpg">
		  		<img  src="<?php echo base_url() ?>assets/img/kcafe2.jpg" style="width:200px;height:auto" />
		  </a>
		  <a href="<?php echo base_url() ?>assets/img/kcafe3.jpg">
		  		<img  src="<?php echo base_url() ?>assets/img/kcafe3.jpg" style="width:200px;height:auto" />
		  </a>
		  <a href="<?php echo base_url() ?>assets/img/kcafe4.jpg">
		  		<img  src="<?php echo base_url() ?>assets/img/kcafe4.jpg" style="width:200px;height:auto" />
		  </a>
		  <a href="<?php echo base_url() ?>assets/img/chefs_employees.jpg">
		  		<img  src="<?php echo base_url() ?>assets/img/chefs_employees.jpg" style="width:200px;height:auto" />
		  </a>

		</div>
	</div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $("#lightgallery").lightGallery({
        	thumbnail:true,
		    animateThumb: false,
		    showThumbByDefault: false
        }); 
    });
</script>