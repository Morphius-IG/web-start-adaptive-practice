$(document).ready(function() {

  $('#button').click(function() {
    $('#modal').addClass("modal_active");
  })

  $('#close').click(function() {
    $('#modal').removeClass("modal_active");
  })

  $('.up-button').click(function() {
    $('html, body').animate({scrollTop: 0},800);
    return false;
  })
  
});



