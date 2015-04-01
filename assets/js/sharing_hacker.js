// we want the sharethis plugin to look good and play nice
// let's hack it!

jQuery.noConflict();
jQuery(document).ready(function($){
  // this hack removes the image from the share link provided by the plugin
  // let's brute force until it shows up. (stupid iframe...)
  // were also hacking the routes, so it just shares the homepage each time
  var ditchImage = setInterval(function () {
    var shareHolder = $('.stButton');
    var shareButton = $('.sharethis');
    shareHolder.children('img').remove();
    shareButton.css('background-image', 'none');

    $('.st_sharethis').attr('st_title', 'RhythmVision');
    $('.st_sharethis').removeAttr('st_url', '');

    if (shareHolder.children('img').length === 0 && shareButton.css('background-image') === 'none') {
      clearInterval(ditchImage);
    }
  }, 10);

  // this kills the onhover 
  // http://support.sharethis.com/customer/portal/topics/205183-customization/articles?page=2
  stLight.options({onhover:false});
});