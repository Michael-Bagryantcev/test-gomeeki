<?php
/**
 * The main template file
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
            the_content();
            ?>
        </div>
    </div>
</div>

<hr>

<?php get_footer();
