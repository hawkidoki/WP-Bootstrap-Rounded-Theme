<?php
/**
 * Template Name: Container
 */

get_header(); ?>

    <?php if(have_posts()): ?>
        <div class="container">
            <?php while(have_posts()): the_post(); ?>
            
                <h2><?php the_title(); ?></h2>
                <hr />
                
                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?php echo home_url(); ?>"><?php _e('Home'); ?></a>
                    </li>
                    <li class="breadcrumb-item active">Container</li>
                </ol>
                
                <article>
                    <?php the_content(); ?>
                </article>
                
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
    
<?php get_footer(); ?>