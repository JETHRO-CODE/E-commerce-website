


$('#hamburger_menu').click(function(){
    $('#dropdown_menu').fadeToggle('slow');
  });


  $('.Categories_heading').click(function(){
    $('.categories').fadeToggle('slow');
  });

  $('.product1 h1').mouseover(function(){
    $(this).css('color','green');
});

$(document).ready(function(){
    $(".contact_items1").first().fadeOut(3000).fadeIn(3000).css("background-color", "yellow");
  });

  $(document).ready(function(){
    $(".contact_items1").last().fadeOut(6000).fadeIn(6000).css("background-color", "yellow");
  });

  
  $('.button').hover(function(){
    $(".button").css({'background': 'red'});
});

$('.button').mouseout(function(){
    $(".button").css('background','rgb(226, 174, 76)');
});


// Contact Us Validation
$(function() {
   
    $(".form-control").on('focus', function(){
 
        $(this).parents(".form-group").addClass('focused');
 
    });
 
    $(".form-+mkkkkkkkkkkcontrol").on('blur', function(){
 
        $(this).parents(".form-group").removeClass('focused');
 
    });
 
});

$(document).ready(function(){
	//$('.box').animate({left: '100px', width: '500px', top: '200px'});
	
	$('.floating_picture').hide(2000).show(2000).fadeOut(2000).fadeIn(2000);
	
	
});

$(document).ready(function(){
  $(".floating_text1").fadeOut(3000).fadeIn(3000);
});

$(document).ready(function(){
  $(".contact_items1").first().fadeOut(3000).fadeIn(3000).css("background-color", "yellow");
});
