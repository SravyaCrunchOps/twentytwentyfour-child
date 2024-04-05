<?php
/**
 * Title: Course Template
 * Slug: twentytwentyfour/template-course
 * Template Types: single, page
 * Viewport width: 1400
 * Inserter: no
 */
?>

<!-- wp:template-part {"slug":"header","theme":"twentytwentyfour-child","tagName":"header","area":"header"} /-->

<div class='container-fluid'>
    <div class='content-container'>
        <div class='font-fam'>
            <h3 class='course'>Course Library</h3>
            <h5 class='course-lead'>Explore all Exponent courses tailored for specific roles, companies, and skills.</h5>
        </div>
        <div class='font-fam'>
            <input class='form-control' type='text' name='search' placeholder='search courses' />
        </div>
    </div>
    
    <div class='container'>
            <?php 
                // Define custom query parameters
                $args = array(
                    'post_type' => 'post', // Display only posts
                    'cat' => 16, // Display posts based on category ID eg: lessons
                    'posts_per_page' => -1, // Display all posts
                );

                // Instantiate custom query
                $custom_query = new WP_Query($args);

                // Output custom query loophave_posts
                if ($custom_query->have_posts()) :
                    while ($custom_query->have_posts()) : $custom_query->the_post();
            ?>
            <article class="card">
                <?php 
                    if (has_post_thumbnail()) {
                        $image = get_the_post_thumbnail();
                        echo '<div class="card-img-top">' . get_the_post_thumbnail() . '</div>';
                    } 
                ?>
                    <div class="card-body">  
                        <h4 class="card-title">
                            <?php the_title(); ?>
                        </h4>                       
                        <?php the_excerpt(); ?>
                        <div class="card-button">
                            <a href="<?php the_permalink() ?>">
                                Start Learning ->
                            </a>
                        </div>
                        
                    </div>
                </article>
            <?php endwhile;
                wp_reset_postdata(); // Reset post data after custom query loop
                else :
            ?>
            <p><?php _e('No posts found.'); ?></p>
            <?php endif; ?>
        </div>
</div>

<!-- wp:template-part {"slug":"footer","theme":"twentytwentyfour-child","tagName":"footer","area":"footer"} /-->

</body>