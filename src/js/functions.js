//adding a no conflict wrapper

jQuery(document).ready(function($) {
    // Inside of this function, $() will work as an alias for jQuery()
    // and other libraries also using $ will not be accessible under this shortcut

//Burger
$('.bun').click(function(){
  $('.burger span:nth-child(2)').toggleClass('transparent');
  $('.burger span:nth-child(1)').toggleClass('rotate-top');
  $('.burger span:nth-child(3)').toggleClass('rotate-bottom');
  $('.nav').toggleClass('nav-active');
  $('.bun').toggleClass('bun-close');
});

//menu - selected
/*$(document).ready(function () {
    $('.nav li a').click(function(e) {

        $('.nav li a').removeClass('selected');

        var $parent = $(this);
        if (!$parent.hasClass('selected')) {
            $parent.addClass('selected');
        }
        e.preventDefault();
    });
});*/

//Slides

 $(function() {
    $(".rslides").responsiveSlides({
  auto: true,             // Boolean: Animate automatically, true or false
  speed: 700,            // Integer: Speed of the transition, in milliseconds
  timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
  pager: false,           // Boolean: Show pager, true or false
  nav: true,             // Boolean: Show navigation, true or false
  random: false,          // Boolean: Randomize the order of the slides, true or false
  pause: true,           // Boolean: Pause on hover, true or false
  pauseControls: true,    // Boolean: Pause when hovering controls, true or false
  prevText: "&laquo",   // String: Text for the "previous" button
  nextText: "&raquo"       // String: Text for the "next" button
  //maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
  //navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
  //manualControls: "",     // Selector: Declare custom pager navigation
  //namespace: "rslides",   // String: Change the default namespace used
  //before: function(){},   // Function: Before callback
  //after: function(){}     // Function: After callback
});
  });



//google analytics

(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49458322-2', 'auto');
  ga('send', 'pageview');


  });








