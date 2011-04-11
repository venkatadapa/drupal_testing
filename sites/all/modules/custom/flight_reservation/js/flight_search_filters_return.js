//$Id$
Drupal.behaviors.flight_search_filters_return = function(context) {
 var search_parameters = $("input[name=searchkey_values]").val();
 var $ajaxMessage =  $('div#light,div#fade');
 //Slider Implemetation Start here
 $(function() {
                $price_slider = $("#price_slider");//Caching slider object
                $price_amount = $("#price_amount");//Caching amount object
                $products = $('#products');//Caching product object
                

                $price_slider.slider({
                    range: true, // necessary for creating a range slider
                    min: 0, //minimum range of slider
                    max: 30000, //maximimum range of slider
                    values: [0,30000], //initial range of slider
                    slide: function(event, ui) { // This event is triggered on every mouse move during slide.
                       $price_amount.html('Rs' + ui.values[0] + ' - Rs' + ui.values[1]);//set value of  amount span to current slider values
                    },
                    stop: function(event, ui){//This event is triggered when the user stops sliding.
                          //console.log(Drupal.settings);
                          //console.log(Drupal.settings);
                          $("input[name=slider_price_min]").val(ui.values[0]);
                          $("input[name=slider_price_max]").val(ui.values[1]);
                          window.scrollTo(0,10);
                          $ajaxMessage.css({display:'block'});
                          var filters = get_selected_airlines();                            
                          $.ajax({
                            url: '/flights/showreturn_ajax',
                            data: "refundable="+filters['refundable']+"&no_stops="+filters['no_stops']+"&airlines_prefered="+filters['airlines']+"&price_min="+$("input[name=slider_price_min]").val()+"&price_max="+$("input[name=slider_price_max]").val()+"&time_min="+$("input[name=slider_time_min]").val()+"&time_max="+$("input[name=slider_time_max]").val()+"&searchkey="+search_parameters, 
                            success: function(data) {
                             $('#flights-list').html(data);
                             $ajaxMessage.css({display:'none'});
                            }
                          });
                    }
                });

                $price_amount.html('Rs' + $price_slider.slider("values", 0) + ' - Rs' + $price_slider.slider("values", 1));
 
                $time_slider = $("#time_slider");//Caching slider object
                $time_amount = $("#time_amount");//Caching amount object
                $products = $('#products');//Caching product object
           
                $time_slider.slider({
                    range: true, // necessary for creating a range slider
                    min: 0, //minimum range of slider
                    max: 1439, //maximimum range of slider
                    values: [0, 1439], //initial range of slider
                    slide: slideTime,
                    stop: function(event, ui){//This event is triggered when the user stops sliding.
                        window.scrollTo(0,10);
                        $ajaxMessage.css({display:'block'});
                        var minutes01 = parseInt($("#time_slider").slider("values", 0) % 60);
                        var hours01 = parseInt($("#time_slider").slider("values", 0) / 60 % 24);
                        var minutes11 = parseInt($("#time_slider").slider("values", 1) % 60);
                        var hours11 = parseInt($("#time_slider").slider("values", 1) / 60 % 24);
                        $("input[name=slider_time_min]").val(getTime2(hours01, minutes01));
                        $("input[name=slider_time_max]").val(getTime2(hours11, minutes11)); 
                        var filters = get_selected_airlines();
                        $.ajax({
                          url: '/flights/showreturn_ajax',
                          data: "refundable="+filters['refundable']+"&no_stops="+filters['no_stops']+"&airlines_prefered="+filters['airlines']+"&price_min="+$("input[name=slider_price_min]").val()+"&price_max="+$("input[name=slider_price_max]").val()+"&time_min="+$("input[name=slider_time_min]").val()+"&time_max="+$("input[name=slider_time_max]").val()+"&searchkey="+search_parameters,
                          success: function(data) {
                            $('#flights-list').html(data);
                            $ajaxMessage.css({display:'none'});
                          }
                        });
                    }
                });
               var minutes0 = parseInt($("#time_slider").slider("values", 0) % 60);
               var hours0 = parseInt($("#time_slider").slider("values", 0) / 60 % 24);
               var minutes1 = parseInt($("#time_slider").slider("values", 1) % 60);
               var hours1 = parseInt($("#time_slider").slider("values", 1) / 60 % 24);
               $time_amount.html(getTime(hours0, minutes0) + ' - ' + getTime(hours1, minutes1));
               

  }); 
  //Slider implementation end here
 
  $('#edit-refundable-only').click( function() {
    var filters = get_selected_airlines();
    window.scrollTo(0,10);
    $ajaxMessage.css({display:'block'}); 
        $.ajax({
         url: '/flights/showreturn_ajax',
         data: "refundable="+filters['refundable']+"&no_stops="+filters['no_stops']+"&airlines_prefered="+filters['airlines']+"&price_min="+           $("input[name=slider_price_min]").val()+"&price_max="+$("input[name=slider_price_max]").val()+"&time_min="+$("input[name=slider_time_min]").val()+"&time_max="+$("input[name=slider_time_max]").val()+"&searchkey="+search_parameters,
         success: function(data) {
          $('#flights-list').html(data);
          $ajaxMessage.css({display:'none'}); 
         }
       });
  });
   
  $('input:radio[name=direct_flights]').click(function () {
     var filters = get_selected_airlines();
     window.scrollTo(0,10);
     $ajaxMessage.css({display:'block'});
     $.ajax({
        url: '/flights/showreturn_ajax',
        data: "refundable="+filters['refundable']+"&no_stops="+filters['no_stops']+"&airlines_prefered="+filters['airlines']+"&price_min="+           $("input[name=slider_price_min]").val()+"&price_max="+$("input[name=slider_price_max]").val()+"&time_min="+$("input[name=slider_time_min]").val()+"&time_max="+$("input[name=slider_time_max]").val()+"&searchkey="+search_parameters,
         success: function(data) {
         $('#flights-list').html(data);
         $ajaxMessage.css({display:'none'});
        }
     });
  });
  
  $("input[type=checkbox][id^=edit-airlines-]").click(function () {
    var filters = get_selected_airlines();
    window.scrollTo(0,10);
    $ajaxMessage.css({display:'block'});
    $.ajax({
        url: '/flights/showreturn_ajax',
        data: "refundable="+filters['refundable']+"&no_stops="+filters['no_stops']+"&airlines_prefered="+filters['airlines']+"&price_min="+           $("input[name=slider_price_min]").val()+"&price_max="+$("input[name=slider_price_max]").val()+"&time_min="+$("input[name=slider_time_min]").val()+"&time_max="+$("input[name=slider_time_max]").val()+"&searchkey="+search_parameters,
        success: function(data) {
          $('#flights-list').html(data);
          $ajaxMessage.css({display:'none'});
        }
    });
  });
  
  //Onward flight previous and next day filters start
  $("#previous_day_link_return").click(function(){
    var return_date = Drupal.settings.return_date;     
    $.ajax({
        url: '/flights/reload_return',
        data: "return_previus_day_filter="+return_date+"&searchkey="+search_parameters,
        dataType: 'json', 
        success: function(data) {
          document.location.href = Drupal.settings.basePath + 'flights/showreturn?onward_fid='+$('span#spn_onward_fid').attr('value')+'&searchkey='+data.data.altered_search_params;
	  //document.location.href = '/flights/showreturn?onward_fid='+$('span#spn_onward_fid').attr('value');
        }
    }); 
   
  });

  $("#next_day_link_return").click(function(){
    var return_date = Drupal.settings.return_date;
    $.ajax({
        url: '/flights/reload_return',
        data: "return_next_day_filter="+return_date+"&searchkey="+search_parameters,
        dataType: 'json',
        success: function(data) {
          document.location.href = Drupal.settings.basePath + 'flights/showreturn?onward_fid='+$('span#spn_onward_fid').attr('value')+'&searchkey='+data.data.altered_search_params ;
        }
    }); 
   
  });
  //Onward flight previous and next day filters end
  
function get_selected_airlines(){
   var airlines_selected = new Array();
    $('.airlines_checkboxes .form-checkbox').each(function(){ 
      if($(this).is(':checked')) {
        airlines_selected.push($(this).val());
       }
    })
   var prefered_airlines = airlines_selected.toString(); //.toString will convert the array into comma seperated string
   var no_stops_filter = $('input:radio[name=direct_flights]:checked').val();
   if(no_stops_filter=='' || no_stops_filter==undefined) {
     no_stops_filter = 1;
   }
   if($('#edit-refundable-only').is(':checked')) {
     refundable_filter = 1;
   } else {
     refundable_filter = 0;
   }
   
   var all_filters = new Array();
   all_filters['refundable'] = refundable_filter;
   all_filters['no_stops'] = no_stops_filter;
   all_filters['airlines'] =  prefered_airlines;
   all_filters['time_min_filter'] = $("input[name=slider_time_min]").val();
   all_filters['time_max_filter'] = $("input[name=slider_time_max]").val();
   all_filters['price_min_filter'] = $("input[name=slider_price_min]").val();
   all_filters['price_max_filter'] = $("input[name=slider_price_max]").val();
   return all_filters;
}  

//Slider related functions start here
function slideTime(){
    var minutes0 = parseInt($("#time_slider").slider("values", 0) % 60);
    var hours0 = parseInt($("#time_slider").slider("values", 0) / 60 % 24);
    var minutes1 = parseInt($("#time_slider").slider("values", 1) % 60);
    var hours1 = parseInt($("#time_slider").slider("values", 1) / 60 % 24);
    $time_amount.html(getTime(hours0, minutes0) + ' - ' + getTime(hours1, minutes1));
}
 
function getTime(hours, minutes) {
    var time = null;
    minutes = minutes + "";
    if (hours < 12) {
        time = "AM";
    }
    else {
        time = "PM";
    }
    if (hours == 0) {
        hours = 0;
    }
    if (hours > 12) {
        hours = hours - 12;
    }
    if (minutes.length == 1) {
        minutes = "0" + minutes;
    }
    return hours + ":" + minutes + " " + time;
}
function getTime2(hours, minutes) {
  minutes = minutes + "";
  if (minutes.length == 1) {
        minutes = "0" + minutes;
  }
  return hours + ":" + minutes;
}
//slider related functions end here
 
}

