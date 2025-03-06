var latestPostsButton = document.getElementById("latest-posts-button");
var latestPostsContainer = document.getElementById("latest-posts-container");

if (latestPostsButton) {
    latestPostsButton.addEventListener("click", function() {
        var ourRequest = new XMLHttpRequest();
        ourRequest.open(
          "GET",
          "http://localhost:8001/wp-json/wp/v2/posts?sticky=true"
        );
        ourRequest.onload = function () {
          if (ourRequest.status >= 200 && ourRequest.status < 400) {
            var data = JSON.parse(ourRequest.responseText);
            createHTML(data);
            latestPostsButton.remove();
          } else {
            console.log(
              "We connected to the server, but it returned an error."
            );
          }
        };

        ourRequest.onerror = function () {
          console.log("Connection error");
        };

        ourRequest.send();
    });    
}

function createHTML(postsData) {
    var ourHTMLstring = '';
    for (let i = 0; i < postsData.length; i++) {
        let post = postsData[i];
        
        ourHTMLstring += `
            <div class="flex flex-col">
                <h2>
                    <a href="${post.link}" target="_blank">${post.title.rendered}</a>
                </h2>
                ${post.excerpt.rendered}
                <br>
            </div>
        `;
    }

    latestPostsContainer.innerHTML = ourHTMLstring;
}


function createHTML2(postsData) {
    var ourHTMLstring = '';

    for (let i = 0; i < postsData.length; i++) {
        let post = postsData[i];

        // Debug: Check if _embedded exists
        console.log(`Post ${i} _embedded:`, post._embedded);

        let imageUrl = "https://via.placeholder.com/600"; // Default

        // Check if _embedded and featuredmedia exist
        if (post._embedded && post._embedded["wp:featuredmedia"]) {
            console.log(`Post ${i} Featured Media:`, post._embedded["wp:featuredmedia"]);
            
            if (post._embedded["wp:featuredmedia"][0].source_url) {
                imageUrl = post._embedded["wp:featuredmedia"][0].source_url;
            }
        }

        ourHTMLstring += `
            <div class="post">
                <img src="${imageUrl}" alt="${post.title.rendered}" width="600">
                <h2>${post.title.rendered}</h2>
                ${post.excerpt.rendered}
                <br>
            </div>
        `;
    }

    latestPostsContainer.innerHTML = ourHTMLstring;
}