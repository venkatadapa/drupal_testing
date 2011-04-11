//$Id$
Drupal.behaviors.slider_range = function(context) {
 $(function() {
                $price_slider = $("#price_slider");//Caching slider object
                $price_amount = $("#price_amount");//Caching amount object
                $products = $('#products');//Caching product object
                $ajaxMessage =  $('#ajaxMessage');//Caching ajaxMessage object

                $price_slider.slider({
                    range: true, // necessary for creating a range slider
                    min: 0, //minimum range of slider
                    max: 30000, //maximimum range of slider
                    values: [100, 23000], //initial range of slider
                    slide: function(event, ui) { // This event is triggered on every mouse move during slide.
                       $price_amount.html('Rs' + ui.values[0] + ' - Rs' + ui.values[1]);//set value of  amount span to current slider values
                    },
                    stop: function(event, ui){//This event is triggered when the user stops sliding.
                        $ajaxMessage.css({display:'block'});
                          $products.find('ul').css({opacity:.2});                            
                          $.ajax({
                            url: '/flights/show2',
                            data: "price_min="+ui.values[0]+"&price_max="+ui.values[1],
                            success: function(data) {
                            //alert('loaded');
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
                $ajaxMessage =  $('#ajaxMessage');//Caching ajaxMessage object

                $time_slider.slider({
                    range: true, // necessary for creating a range slider
                    min: 0, //minimum range of slider
                    max: 1439, //maximimum range of slider
                    values: [0, 1439], //initial range of slider
                    slide: slideTime,
                    stop: function(event, ui){//This event is triggered when the user stops sliding.
                        $ajaxMessage.css({display:'block'});
                        $products.find('ul').css({opacity:.2});
                        var minutes01 = parseInt($("#time_slider").slider("values", 0) % 60);
                        var hours01 = parseInt($("#time_slider").slider("values", 0) / 60 % 24);
                        var minutes11 = parseInt($("#time_slider").slider("values", 1) % 60);
                        var hours11 = parseInt($("#time_slider").slider("values", 1) / 60 % 24);
                              
                        $.ajax({
                          url: '/flights/show2',
                          data: "time_min="+getTime2(hours01, minutes01)+"&time_max="+getTime2(hours11, minutes11),
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
}

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
