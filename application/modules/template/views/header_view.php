<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<meta name="description" content=""/>
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="mobile-web-app-capable" content="yes">
    <link rel="SHORTCUT ICON" href="<?php //echo base_url().'img/naslogo.jpg';?>">
    <title>Kabrina's Cafe | <?php echo $title;?></title>

    <script type="text/javascript">
		var base_url 		= '<?php echo base_url();?>';
		var api_base_url 	= "<?php echo base_url('food');?>";
	</script>
	<?php      	
		$this->load->view('utils/dynamicLoads');
	?>
  	<style type="text/css">
  		body {
	   font-family: "Helvetica";
	   font-weight: 300;
	}
	.ui.vertical.menu{
		width: 100%;
		display: none;
	}
</style>
</head>
<body>
<style type="text/css">
	
	 #content{
      /*margin-right: 35px;*/
      border:3px solid green;
     /* margin-left: 35px;*/
    }
</style>


<div class="ui center aligned armygreen inverted segment" style="margin:0rem 0em;">
	<div class="ui stackable grid">
		<div class="computer tablet only row">
			<div class="ui armygreen inverted fluid seven item menu">
				<div class="brand item" style="font-size:20px;">Kabrina's Cafe</div>
			 	  <a class="item" style="font-size:15px;" href="<?php echo base_url() ?>"> Home </a>
				  <a class="item" style="font-size:15px;" href="<?php echo base_url() ?>food">Our Food</a>
				  <a class="item" style="font-size:15px;" href="<?php echo base_url() ?>about">About Us</a>
				  <a class="item" style="font-size:15px;" href="<?php echo base_url() ?>gallery">Events Gallery</a>
				  <a class="item" style="font-size:15px;" href="<?php echo base_url() ?>hire">Contact Us</a>
			</div>
		</div>
		<div class="mobile only narrow row">
			<div class="ui armygreen inverted navbar menu">
				<div class="brand item">Kabrina's Cafe</div>
                <div class="right menu open">
                    <a href="" class="menu item">
                        <i class="sidebar icon"></i>
                    </a>
                </div>
			</div>
			<div class="ui armygreen inverted vertical navbar menu">
				<a class="item" style="font-size:20px;" href="<?php echo base_url() ?>"> Home </a>
				  <a class="item" style="font-size:20px;" href="<?php echo base_url() ?>food">Our Food</a>
				  <a class="item" style="font-size:20px;" href="<?php echo base_url() ?>about">About Us</a>
				  <a class="item" style="font-size:20px;" href="<?php echo base_url() ?>#">Events Gallery</a>
				  <a class="item" style="font-size:20px;" href="<?php echo base_url() ?>hire">Contact Us</a>
            </div>
		</div>
	</div>
</div>
 