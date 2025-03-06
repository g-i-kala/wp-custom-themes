jQuery(document).ready(function ($) {
    $(".hamburger").on("click", function () {
        $(this).toggleClass("active");
        $(".navbar").stop(true, true).slideToggle();
        
        $(".navbar").toggleClass("open");

        let expanded = $(this).attr("aria-expanded") === "true" ? "false" : "true";
        $(this).attr("aria-expanded", expanded);

        let ariaHidden = $(".navbar").hasClass("open") ? "false" : "true";
        $(".navbar").attr("aria-hidden", ariaHidden);
    });

    $(document).click(function (e) {
        console.log("dupa")
        if (!$(e.target).closest('.navbar, .hamburger').length) {
            // Close navbar if clicked outside
            $(".navbar").stop(true, true).slideUp();
            $(".hamburger").removeClass("active").attr("aria-expanded", "false");
            $(".navbar").removeClass("open").attr("aria-hidden", "true");
        }
    });

});



