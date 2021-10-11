// JavaScript Document
 $(document).ready(function() {
    $('#autoWidth').lightSlider({
        autoWidth:true,
        loop:true,
        onSliderLoad: function() {
            $('#autoWidth').removeClass('cs-hidden');
        } 
    });  
  });

  $(document).ready(function() {
    $('#autoWidth2').lightSlider({
        autoWidth:true,
        loop:true,
        onSliderLoad: function() {
            $('#autoWidth2').removeClass('cs-hidden2');
        } 
    });  
  });

   $(document).ready(function() {
    $('#autoWidth3').lightSlider({
        autoWidth:true,
        loop:true,
        onSliderLoad: function() {
            $('#autoWidth3').removeClass('cs-hidden3');
        } 
    });  
  });
 
    $('.carousel').carousel()
      $('.carousel').carousel({
      interval: 1500
    });
