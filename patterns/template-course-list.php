<?php
/**
 * Title: Course List Template
 * Slug: twentytwentyfour/template-course-list
 * Template Types: single, page
 * Viewport width: 1400
 * Inserter: no
 */
?>

<!-- wp:template-part {"slug":"header","theme":"twentytwentyfour-child","tagName":"header","area":"header"} /-->

<div class='container-fluid'>
<?php   
    // Get the post slug from the URL using basename
    $post_slug = basename($_SERVER['REQUEST_URI']);        
    // Retrieve the post based on the slug
    $post = get_page_by_path($post_slug, OBJECT, 'post');        
    // Check if the post exists
    if ($post) {
        // Output post title
        echo  '<div class="summary">
                    <div class="summary-left">
                        <p class="breadcrumb">
                            <span><a href="/courses">Courses</a></span>
                            <span> &gt; </span>
                            <span>'.$post_slug.'</span>
                        </p>
                        <h1 class="course-list-title">'. $post->post_title .'</h1>
                        <div class="course-summary">
                            <h4 id="course-summary-title">summary</h4>
                            <p id="course-summary-content"></p>    
                        </div>
                        <div class=card-button>
                            <a href="/"> Get access to our course </a>
                        </div>
                    </div>
                    <div class="summary-right">';
                    if (has_post_thumbnail($post->ID)) {
                        $image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                        echo '<img src="' . $image_url[0] . '" alt="' . $post->post_title . '" class="featured_image">';
                    }
                echo    '</div>
                </div>';
        // Output post content
    } else {
        echo 'Post not found!';
    }
?>
    <div class="content">

    </div>

</div>

<!-- wp:template-part {"slug":"footer","theme":"twentytwentyfour-child","tagName":"footer","area":"footer"} /-->

<script>
// URL of your WordPress site
const wordpressURL = 'http://localhost:8051/techies_blog';

// Function to fetch post data
function fetchPostData(slug) {
    fetch(`${wordpressURL}/wp-json/wp/v2/posts?slug=${slug}&_embed`)
    .then(response => response.json())
    .then(data => { console.log(data[0])
        // if (data.length > 0) {
        //     const post = data[0];
            // document.getElementById('course-summary-content').textContent = post.title.rendered;
            // document.getElementById('post-content').innerHTML = post.content.rendered;

            // // Check if the post has a featured image
            // if (post.featured_media) {
            //     fetch(`${wordpressURL}/wp-json/wp/v2/media/${post.featured_media}`)
            //     .then(response => response.json())
            //     .then(imageData => {
            //         const imageUrl = imageData.media_details.sizes.full.source_url;
            //         const imageElement = document.createElement('img');
            //         imageElement.src = imageUrl;
            //         document.getElementById('featured-image').appendChild(imageElement);
            //     });
            // }
        // }
        //  else {
        //     document.getElementById('post-title').textContent = 'Post not found!';
        // }
    })
    .catch(error => console.error('Error fetching post data:', error));
}

// Call the function with the post slug
const basename = window.location.pathname.split('/')[2];
console.log(basename);
fetchPostData(basename); // Change 'sample-post' to your post slug
</script>