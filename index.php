<?php get_header(); ?>

    <?php if(have_posts()): ?>
        <div class="container-fluid">
        
            <h2><?php _e('Blog'); ?></h2>
            <hr />
            
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="<?php echo home_url(); ?>"><?php _e('Home'); ?></a>
                </li>
                <li class="breadcrumb-item active">My Dashboard</li>
            </ol>
            
            <div class="row">
                <?php while(have_posts()): the_post(); ?>
                    <div class="col-lg-4">
                        <article class="card mb-4">
                            <div class="card-body">
                                <h4><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
                                <?php the_excerpt(); ?>
                            </div>
                            <div class="card-footer">
                                <a href="<?php echo get_permalink(); ?>" class="btn btn-primary"><?php _e('Read More...'); ?></a>
                            </div>
                        </article>
                    </div>
                <?php endwhile; ?>
            </div>
            
        </div>
    <?php endif; ?>
    
<?php get_footer(); ?>