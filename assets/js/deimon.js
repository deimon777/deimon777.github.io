$(document).ready(function() {
  /* ScrollSpy */
  // $("body").scrollspy({offset: 100,target: "#navbar-menu",});
  $("#menu a").on("click", function(e) {
    var $hash = this.hash;
    if ($hash !== "") {
      e.preventDefault();
      // window.location.hash = $hash;
      $("html, body").animate({
        scrollTop: $($hash).offset().top-70
      }, 800);
    }
  });

  /* Gris */
  // $('.grayscale').gray();

  /* Sort */
  var grp = $(".grid").find(".grid-item");
  var cnt = grp.length;
  var temp, x;
  for (var i = 0; i < cnt; i++) {
    temp = grp[i];
    x = Math.floor(Math.random() * cnt);
    grp[i] = grp[x];
    grp[x] = temp;
  }
  $(grp).remove();
  $(".grid").append($(grp));

  /* Caption */
  $(".grid-item").hover(function(){
    $(".text-item",this).slideDown("slow");
    // $(".text-item",this).fadeIn("slow");
  }, function(){
    $(".text-item",this).slideUp("slow");
    // $(".text-item",this).fadeOut("slow");
  });

  /* Back To Top */
  $(window).on('scroll resize load', function() {
    var scrollTop = $(this).scrollTop();
    var topDistance = $('.intro').offset().top;
    $('#back_top').css("opacity", ((topDistance) < scrollTop)?1:0);
  });
  $('#back_top').on("click", function(e) {
    // window.location.hash = "";
    e.preventDefault();
    $("html, body").animate({
      scrollTop: 0
    }, "slow");
  });
});
