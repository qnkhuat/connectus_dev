jQuery(document).ready(function($) {
  if($(window).width()>600){
    var coursePopup = new Drooltip({
       "element" : ".courses-item-box",
       "trigger" : "click",
       "position" : "right",
       "background" : "white",
       "color" : "#686f7a",
       "animation": "bounce",
    });
  }
});
