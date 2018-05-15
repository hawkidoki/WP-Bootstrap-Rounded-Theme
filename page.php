<?php get_header(); ?>

    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
            <div class="container-fluid">
            
                <h2><?php _e('Blog'); ?></h2>
                <hr />
                
                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?php echo home_url(); ?>"><?php _e('Home'); ?></a>
                    </li>
                    <li class="breadcrumb-item active"><?php the_title(); ?></li>
                </ol>
                
                <article class="card mb-4">
                    <div class="card-body">
                        <h4><?php the_title(); ?></h4>
                        <?php the_content(); ?>
                    </div>
                </article>
                    
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
    
<?php get_footer(); ?>