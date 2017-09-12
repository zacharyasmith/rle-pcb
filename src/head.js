$(document).ready(function() {

  //smooth scrolling
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash)
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']')
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000)
        return false
      }
    }
  })

  // fix menu when passed
  $('.masthead').visibility({
    once: false,
    onBottomPassed: function() {
      $('.fixed.menu').transition('fade in')
    },
    onBottomPassedReverse: function() {
      $('.fixed.menu').transition('fade out')
    }
  })

});
