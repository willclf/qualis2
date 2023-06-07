<?php 
$subtituloBlogHome = get_field('subtitulo_blog_home', 2);
$tituloBlogHome = get_field('titulo_blog_home', 2);
$textoBlogHome = get_field('texto_blog_home', 2);
$linkBlogHome = get_field('link_blog_home', 2);
?>

<section class="container-blog-home">
    <div class="textos-blog-home">
        <h4><?php echo $subtituloBlogHome?></h4>
        <h2><?php echo $tituloBlogHome?></h2>
        <p><?php echo $textoBlogHome?></p>
        <a href="<?php echo $linkBlogHome?>">Acessar Blog</a>
    </div>
    
        <?php
            $args = array(
                'post_type' => 'card_blog',
                'posts_per_page' => -1,
                'order' => 'desc'
            );

            $loop = new WP_Query($args);
            
            if ($loop->have_posts()) :
                while ($loop->have_posts()) :
                    $loop->the_post(); 
                    
        ?>
        <div class="card-blog">
            <div><?php the_post_thumbnail()?></div>
            <div>
                <h6><?php echo get_the_date();?></h6>
                <h2><?php the_title(); ?></h2>
                <p><?php the_excerpt(); ?></p>
                <a href="<?php echo the_permalink();?>">leia mais +</a>
            </div>
        </div>

        <?php 
            wp_reset_postdata();
            endwhile;
            
            endif;?>
    
</section>


