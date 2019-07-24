<?php get_header(); ?>

<div class="row">

    <div class="col-9">

        <?php if(have_posts()) : ?>
    
        <?php while(have_posts()) : the_post(); ?>


        <div class="col-12 border-lilac p-4 my-4">
            <h2>
             <a class="text-lilac text-decoration-none" href="<?php the_permalink(); ?>">
              <?php the_title(); ?> </h2>
            </a>
            <?php the_content(); ?>
             <small>
                <?php the_time( 'F j, Y g:i a'); ?>
                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                    <?php the_author(); ?>
                </a>
            </small>
            </div>
            <?php endwhile; ?>

            <?php else : ?>
            <p>
                <?php__( 'No Posts Found'); ?>
            </p>
            <?php endif; ?>
        
    </div>
        <?php if(has_post_thumbnail()) : ?>
        <?php the_post_thumbnail(); ?>
        <?php endif; ?>
<div class="col-3">
<?php
      if(is_active_sidebar('sidebar')):
     dynamic_sidebar('sidebar');
     endif;  
?>
</div>
 </div>

<?php get_footer(); ?>