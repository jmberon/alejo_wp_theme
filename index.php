<?php get_header(); ?>


<div class="container">
    <div class="main">

    <div class="grid-container back">
        <div class="grid-x grid-margin-x small-up-1 medium-up-3 large-up-3">
            <?php if (have_posts()) : ?>
        
                <?php while (have_posts()) : the_post(); ?>
        
                <div class="cell">
                    <div class="twoTopcard">
                        <a href="<?php the_permalink(); ?>" class="button">
                            <?php if(has_post_thumbnail()) : ?>
                                <div class="post-thumbnail">
                                <?php the_post_thumbnail(); ?>
                                </div>
                            <?php endif; ?>
                        </a>
                        <div class="card-section">
                        <h4 class="text-front"><?php the_title(); ?></h4>
                        <?php the_excerpt(); ?>
                        </div>
                    </div>
                </div>
        
        
                <?php endwhile; ?>
        
            <?php else : ?>
                <?php echo wpautop('Sorry, No posts were found'); ?>
            <?php endif; ?>

        </div>
    </div>
    
    

    </div>

<?php get_footer(); ?>