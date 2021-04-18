(function () {
    $(".toOpen").on("click", function () {
      $(".hamburger-menu").toggleClass("menu");
      $(".menu-wrapper").toggleClass("toClose");
      $(".menu-wrapper").text("✕");
      $(".menu-wrapper").removeClass("toOpen");
    });
    $(".toClose").on("click", function () {
        $(".menu-wrapper").text("☰");
        $(".hamburger-menu").removeClass("menu");
        $(".menu-wrapper").removeClass("toClose");
        $(".menu-wrapper").toggleClass("toOpen");
    });
    $(".navBtn").on("click", function () {
        $(".hamburger-menu").removeClass("menu");
    });
  })();
  