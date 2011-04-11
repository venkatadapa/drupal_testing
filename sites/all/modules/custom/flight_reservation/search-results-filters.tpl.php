<?php 
//$Id$ 
?>
<div id="modify-search">
  <div id="modify-search-title"><span class="block-collapse"></span>Modify Your Search</div>
  <?php print drupal_get_form('flights_filter_form_page'); ?>
  </div>
  <div id="filter-results">FILTER YOUR RESULTS</div>
  <div class="left" id="leftSlider">
  <div id="price-range-block">
  <div id="price_range"><span class="block-collapse block-expanded"></span>Price Range</div>
  <div id="price-range-content">
   <div id="price_amount"></div>
    <div id="price_slider"></div>
  	        <span class="slide-arrows-text">slide arrows to refine results</span>
   </div>
   </div>
   <div id="time-range-block">
   <div id="time_range"><span class="block-collapse block-expanded"></span>Time Range</div>
   <div id="time-range-content">
   <div id="time_amount"></div>
   <div id="time_slider"></div>
   <span class="slide-arrows-text">slide arrows to refine results</span>
  </div>
  </div>
  </div>
  <div class="left" id="productsWrap">
  <div id="ajaxMessage">Loading</div>
  <div id="products"></div>
</div>
<?php print drupal_get_form('flight_search_extra_filters_form');?>
