<style type="text/css">
.rslides {
  position: relative;
  list-style: none;
  overflow: hidden;
  width: 100%;
  padding: 0;
  margin: 0;
  margin-left: 130px;
  }

  #mobileslides{
    margin-left: 0px;
  }
  #capmobile{
    max-width:607px;
  }
  #tabletslides{
    margin-left: 30px;
  }

.rslides li {
  -webkit-backface-visibility: hidden;
  position: absolute;
  display: none;
  width: 100%;
  left: 0;
  top: 0;
  }

.rslides li:first-child {
  position: relative;
  display: block;
  float: left;
  }

.rslides img {
  display: block;
  height: auto;
  float: left;
  width: 100%;
  border: 0;
  }
  .caption {
  position: absolute;
  display: block;
  bottom: 0;
  left: 0;
  right: 0;
  padding: 15px;
  text-align: center;
  background: #1C7D33;
  background: rgba(0,0,0, .8);
  color: #fff;
  width: 960px;
}
.ui.segment{
    box-shadow: 0px 0px 0px 0 rgba(34, 36, 38, 0.15);
    margin: 0rem 0em;
    padding: 1em 1em;
    border-radius: 0.28571429rem;
    border: 0px;
}
</style>

<div class="ui centered grid" style="width:100%;">
  <div class="computer only row">
    <div class="fifteen wide column" style="text-align:justify;">
      <div class="ui segment">
          <ul class="rslides">
            <li>
              <img class="ui centered massive image"src="<?php echo base_url() ?>assets/img/food1.jpg" alt="">
              <p class="caption">Beef Stew & Chapati</p>
            </li>
            <li>
              <img class="ui centered massive image"src="<?php echo base_url() ?>assets/img/food2.jpg" alt="">
              <p class="caption">Pilau & Vegetable Rice</p>
            </li>
            <!-- <li>
              <img class="ui centered massive image"src="<?php //echo base_url() ?>assets/extra/ResponsiveSlides/demo/images/3.jpg" alt="">
              <p class="caption">This is the third picture</p>
            </li> -->
          </ul>
          <h2 class="ui center aligned header"><a class="item" href="<?php echo base_url() ?>reviews"  style="color:#1C7D33">What Our Client Say</a></h2>

      </div>
    </div>
  </div>
  <div class="tablet only row">
    <div class="fifteen wide column" style="text-align:justify;">
      <div class="ui segment">
          <ul class="rslides" id="tabletslides">
            <li>
              <img class="ui centered massive image"src="<?php echo base_url() ?>assets/img/food1.jpg" alt="">
              <p class="caption">Beef Stew & Chapati</p>
            </li>
            <li>
              <img class="ui centered massive image"src="<?php echo base_url() ?>assets/img/food2.jpg" alt="">
              <p class="caption">Pilau & Vegetable Rice</p>
            </li>
            <!-- <li>
              <img class="ui centered massive image"src="<?php //echo base_url() ?>assets/extra/ResponsiveSlides/demo/images/3.jpg" alt="">
              <p class="caption">This is the third picture</p>
            </li> -->
          </ul>
          <h2 class="ui center aligned header"><a class="item" href="<?php echo base_url() ?>reviews" style="color:#1C7D33">What Our Client Say</a></h2>

      </div>
    </div>
  </div>
  <div class="mobile only row">
  <div class="fifteen wide column" style="text-align:justify;">
      <div class="ui segment" style="width:108%">
         <!--  <h2 class="ui center aligned header" style="color:#1C7D33">Kabrinas Cafe Limited offers various services in the Hospitality Industry</h2> -->
          <ul class="rslides" id="mobileslides">
            <li>
              <img class="ui centered massive image"src="<?php echo base_url() ?>assets/img/food1.jpg" alt="">
              <p class="caption" id="capmobile">Beef Stew & Chapati</p>
            </li>
            <li>
              <img class="ui centered massive image"src="<?php echo base_url() ?>assets/img/food2.jpg" alt="">
              <p class="caption" id="capmobile">Pilau & Vegetable Rice</p>
            </li>
            <!-- <li>
              <img class="ui centered massive image"src="<?php //echo base_url() ?>assets/extra/ResponsiveSlides/demo/images/3.jpg" alt="">
              <p class="caption" id="capmobile">This is the third picture</p>
            </li> -->
          </ul>
          <h2 class="ui center aligned header"><a class="item" href="<?php echo base_url() ?>reviews" style="color:#1C7D33">What Our Client Say</a></h2>
      </div>
    </div>
  </div>

</div>
	
<script>
$(function() {
    $(".rslides").responsiveSlides();
  });
</script>
<script src="<?php echo base_url() ?>assets/extra/ResponsiveSlides/responsiveslides.min.js"></script>