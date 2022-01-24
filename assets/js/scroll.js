$(document).ready(function () {
  // Add smooth scrolling to all links
  $("a").on('click', function (event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function () {

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});

// Responsive Menu
$(".menu-toggle").click(function(e) {
  e.preventDefault();
  $(this).toggleClass("active");
  $(".multi-level-responsive-menu ul.menu").slideToggle();
});
$("ul.menu >li >ul").siblings("a").prepend("<span class='arrow-bottom'></span>").addClass("slidedown");
if (document.documentElement.clientWidth < 769) {
jQuery("ul.menu >li >ul li ul").siblings("a").prepend("<span class='arrow-bottom'></span>").addClass("slidedown");
    jQuery(".slidedown").click(function(e) {
        e.preventDefault();
        jQuery(this).siblings("ul").slideToggle();
    });
}
else if(document.documentElement.clientWidth > 769){
jQuery("ul.menu >li >ul li ul").siblings("a").prepend("<span class='arrow-right'></span>");
}	