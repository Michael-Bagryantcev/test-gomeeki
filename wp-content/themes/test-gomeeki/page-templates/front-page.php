<?php
/**
 * Template Name: Front Page
 *
 * @package Gomeeki
 * @subpackage Test Gomeeki
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
	<!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

            	<?php 
            	$args = array('numberposts' => '4');
				$recent_posts = wp_get_recent_posts($args);
				foreach ($recent_posts as $recent) {
					?>
	                <div class="post-preview">
	                    <a href="<?php the_permalink($recent['ID']); ?>">
	                        <h2 class="post-title">
	                            <?php echo $recent['post_title']; ?>
	                        </h2>
	                        <h3 class="post-subtitle">
	                            <?php echo get_field('subheading', $recent['ID']); ?>
	                        </h3>
	                    </a>
	                    <p class="post-meta">Posted by <a href="<?php echo get_author_posts_url($recent['post_author']); ?>"><?php echo get_the_author_meta('display_name', $recent['post_author']); ?></a> on <?php echo date('F j, Y', strtotime($recent['post_date'])); ?></p>
	                </div>
	                <hr>
					<?php
				} 
				?>

                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul>


            </div>
        </div>
    </div>

    <hr>

<?php get_footer();
