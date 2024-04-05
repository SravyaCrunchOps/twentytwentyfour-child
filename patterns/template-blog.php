<?php
/**
 * Title: Blog Template
 * Slug: twentytwentyfour/template-blog
 * Template Types: single, page
 * Viewport width: 1400
 * Inserter: no
 */
?>

<!-- wp:template-part {"slug":"header","theme":"twentytwentyfour-child","tagName":"header","area":"header"} /-->

    <main id="main" class="site-main">
        <div class="main-title">
                <h1>Techies Blog</h1>
                <p>Read our latest blog posts on Kubernets, Devops, and other tech roles.</p>
            </div>
        <div class="container">
            
                    <?php
                    // Define custom query parameters
                    $args = array(
                        'post_type' => 'post', // Display only posts
                        'posts_per_page' => -1, // Display all posts
                    );

                    // Instantiate custom query
                    $custom_query = new WP_Query($args);

                    // Output custom query loop
                    if ($custom_query->have_posts()) :
                        while ($custom_query->have_posts()) : $custom_query->the_post();
                        ?>
                        <a href="<?php the_permalink(); ?>" class='permalink'>
                            <article id="post-<?php the_ID(); ?>" class='posts'>
                                <?php 
                                    if (has_post_thumbnail()) {
                                        $image = get_the_post_thumbnail();
                                        echo '<div class="post-thumbnail">' . get_the_post_thumbnail() . '</div>';
                                    }
                                ?>
                                <header class="entry-header">
                                    <p class="entry-title">
                                        <?php the_title(); ?>
                                    </p>
                                </header>

                                <footer class="entry-footer">
                                    <div class="entry-meta">
                                        <p>
                                            <?php 
                                                $date = get_the_date('Y-m-d H:i:s');
                                                echo time_ago($date); 
                                                
                                            ?> 
                                        </p>
                                        <?php
                                            $tags = get_the_tags();
                                            if($tags) {
                                                echo'<ul class="post-tags">';
                                                foreach($tags as $tag) {
                                                    echo '<li class="tag">'.$tag->name. '</li>';
                                                }
                                                echo '</ul>';
                                            }
                                        ?>
                                    </div>
                                </footer>

                                <div class="entry-content">
                                    <?php the_excerpt(); ?>
                                </div>

                            </article>
                        </a>
                        <?php endwhile;
                        wp_reset_postdata(); // Reset post data after custom query loop
                    else :
                        ?>
                        <p><?php _e('No posts found.'); ?></p>
                    <?php endif; ?>
        </div>
    </main>

    <!-- wp:template-part {"slug":"footer","theme":"twentytwentyfour-child","tagName":"footer","area":"footer"} /-->