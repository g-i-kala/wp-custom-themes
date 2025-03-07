jQuery(document).ready(function ($) {
    let menu = $("#full-screen-menu");
    let openButton = $("#mobile-menu");
    let closeButton = $("#mobile-close");
    let isOpen = false;

    openButton.on("click", function (e) {
        e.stopPropagation();
        menu.removeAttr("inert").stop(true, true).slideToggle();
        menu.attr("aria-hidden", "false");
        menu.find("a, button").first().focus(); // Move focus inside the menu
        isOpen = true;

        // Attach event listener to close when clicking outside
        $(document).on("click", closeMenuOnClickOutside);
    });

    closeButton.on("click", function () {
        closeMenu();
    });

    function closeMenu() {
        menu.attr("inert", "").stop(true, true).slideToggle();
        menu.attr("aria-hidden", "true");
        openButton.focus(); // Return focus to the menu button
        isOpen = false;

        // Remove the event listener after closing
        $(document).off("click", closeMenuOnClickOutside);
    }

    function closeMenuOnClickOutside(e) {
        if (!$(e.target).closest('.navbar').length) {
            closeMenu();
        }
    }
});
