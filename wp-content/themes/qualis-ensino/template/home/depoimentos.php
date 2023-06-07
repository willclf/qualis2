<?php 
$subtituloDepoimentos = get_field('subtitulo_depoimentos', 2);
$tituloDepoimentos = get_field('titulo_depoimentos', 2);
$urlVideo = get_field('url_video', 2);
$nomeVideo = get_field('nome_video', 2);
$cargoVideo = get_field('cargo', 2);
$fotoVideo = get_field('foto_video', 2);

?>

<section class="container-videos">
    <div>
        <h4><?php echo $subtituloDepoimentos?></h4>
        <h2><?php echo $tituloDepoimentos?></h2>
    </div>
    <div class="container-card-videos">
        <?php
            $args = array(
                'post_type' => 'card_video',
                'posts_per_page' => -1,
                'order' => 'asc'
            );

            $loop = new WP_Query($args);
            
            if ($loop->have_posts()) :
                while ($loop->have_posts()) :
                    $loop->the_post(); 
                    
        ?>
        <div class="card-video">
            <div>
                <div class="video">
                    <?php the_content(); ?>
                </div>
                <div class="dados-video">
                    <div class="foto"><?php the_post_thumbnail()?></div>
                    <h3><?php the_title(); ?></h3>
                </div>
            </div>
        </div>

        <?php // Restaurar os dados originais do loop do WordPress
            wp_reset_postdata();
            endwhile;
            
            endif;?>
    </div>
</section>