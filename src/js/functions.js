//adding a no conflict wrapper

jQuery(document).ready(function($) {
    // Inside of this function, $() will work as an alias for jQuery()
    // and other libraries also using $ will not be accessible under this shortcut

//Burger
$('.bun').click(function(){
  $('.nav').toggleClass('nav-active');
  $('.bun').toggleClass('bun-close');
  $('.burger').toggleClass('icon-align-justify');
  $('.burger').toggleClass('icon-cancel');
  $('body').toggleClass('no-scroll');
});

//Sorting projects

$("input:radio[name=project-type]").click(function(){

  var value = '.' + $(this).val();

  // if single project is not equal to single project or single project with this particular value, hide

  var project = $('.single-project');
  var project_type =  $('.single-project' + value);

  project.css('display', 'none');
  project_type.css('display', 'flex');

});

//sorting blog 

$("input:radio[name=blog-type]").click(function(){

  var value = '.' + $(this).val();

  // if single article is not equal to single article or single article with this particular value, hide

  var article_item = $('.saj-article-item');
  var article_item_type =  $('.saj-article-item' + value);

  article_item.css('display', 'none');
  article_item_type.css('display', 'flex');

});

//change styling of the radio buttons

$('.p-type').on('click', function(){
    $('.p-type').removeClass('selected');
    $(this).addClass('selected');
});



//Slides

 $(function() {
    $(".rslides").responsiveSlides({
  auto: true,             // Boolean: Animate automatically, true or false
  speed: 700,            // Integer: Speed of the transition, in milliseconds
  timeout: 12000,          // Integer: Time between slide transitions, in milliseconds
  pager: false,           // Boolean: Show pager, true or false
  nav: true,             // Boolean: Show navigation, true or false
  random: false,          // Boolean: Randomize the order of the slides, true or false
  pause: true,           // Boolean: Pause on hover, true or false
  pauseControls: true,    // Boolean: Pause when hovering controls, true or false
  prevText: "h",   // String: Text for the "previous" button
  nextText: "i"       // String: Text for the "next" button
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








