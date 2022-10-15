<?php get_header(); ?>


<div class="container">
    <div class="main">

    <div class="grid-container back">
        <div class="grid-x grid-margin-x small-up-1 medium-up-3 large-up-3">
            <?php if (have_posts()) : ?>
        
                <?php while (have_posts()) : the_post(); ?>
                <?php 
                    /* <article class="post">
                        <h3>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h3>
                        <div class="meta">
                            Created By 
                            <a href="<?php get_author_posts_url(get_the_author_meta('ID')); ?>">
                                <?php the_author(); ?>
                            </a> on <?php the_time('F j, Y g:i a'); ?>
                        </div>
            
                        
                        <?php if(has_post_thumbnail()) : ?>
                            <div class="post-thumbnail">
                            <?php the_post_thumbnail(); ?>
                            </div>
                        <?php endif; ?>                    
                        <?php the_excerpt(); ?>
                        
                        <br>
                        <a class="button" href="<?php the_permalink(); ?>">
                            Read More
                        </a>
                    </article> */                
                ?>
        
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