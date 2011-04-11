//$Id$
Drupal.behaviors.slider_range = function(context) {
 
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
