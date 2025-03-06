document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".read-more-link-preview").forEach(function (link) {
        const postTitle = link.getAttribute("data-post-title");
        if (postTitle) {
            link.setAttribute("aria-label", `Read more about ${postTitle}`);
        }
    });
});