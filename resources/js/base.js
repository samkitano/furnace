$(function () {
  $(".hasTooltip").tooltip();
})
$('.dismiss, .overlay').on('click', function() {
  $('.sidebar').removeClass('active');
  $('.overlay').removeClass('active');
});

$('.open-menu').on('click', function(e) {
  e.preventDefault();
  $('.sidebar').toggleClass('active');
  $('.overlay').toggleClass('active');
  // close opened sub-menus
  $('.collapse.show').toggleClass('show');
  const exp = $('a[aria-expanded=true]').attr('aria-expanded')
  $('a[aria-expanded=true]').attr('aria-expanded', !exp);
});
