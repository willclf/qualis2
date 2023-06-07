<?php 
/*
Template Name: Blog
*/ 
?>

<?php get_header()?>


<section>
    <div>


        <div class="container-page-blog">
            <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => -1,
                    'order' => 'desc'
                );

                $loop = new WP_Query($args);
                
                if ($loop->have_posts()) :
                    while ($loop->have_posts()) :
                        $loop->the_post(); 
                        
            ?>
            <div>
                <div><?php the_post_thumbnail()?></div>
                <div>
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?php echo the_permalink();?>">Leia Mais</a>
                </div>
            </div>

            <?php // Restaurar os dados originais do loop do WordPress
                wp_reset_postdata();
                endwhile;
                
                endif;?>
        </div>   
    </div>    
</section>

<?php get_footer();?>
