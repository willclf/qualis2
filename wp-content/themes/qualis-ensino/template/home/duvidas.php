<?php 
$subtituloDuvidasHome = get_field('subtitulo_duvidas', 2);
$tituloDuvidasHome = get_field('titulo_duvidas', 2);
?>

<section class="container-duvidas">
    <div>
        <h4><?php echo $subtituloDuvidasHome?></h4>
        <h2><?php echo $tituloDuvidasHome?></h2>
    </div>
    <div class="container-sanfona">
        <div class="">
            <?php
                $args = array(
                    'post_type' => 'duvidas',
                    'posts_per_page' => -3,
                    'order' => 'desc'
                );

                $loop = new WP_Query($args);
                
                if ($loop->have_posts()) :
                    while ($loop->have_posts()) :
                        $loop->the_post(); 
                        
            ?>
            <div>
                <details>
                    <summary>
                        <?php the_title(); ?>
                    </summary> 

                    <p>
                        <?php the_content(); ?>
                    </p>

                </details>
            </div>                
            <?php // Restaurar os dados originais do loop do WordPress
                wp_reset_postdata();
                endwhile;
                
                endif;?>
        </div>
    </div>
</section>


