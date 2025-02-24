jQuery(document).ready(function ($) {
    $(".hamburger").on("click", function () {
        $(this).toggleClass("active");
        $(".navbar").toggleClass("open");

        let expanded = $(this).attr("aria-expanded") === "true" ? "false" : "true";
        $(this).attr("aria-expanded", expanded);

        $(".navbar").slideToggle();
    });
});


