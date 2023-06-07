<?php 
$subtituloNoticiasHome = get_field('subtitulo_noticias_home', 2);
$tituloNoticiasHome = get_field('titulo_noticias_home', 2);
?>

<section class="container-noticias-home">
    <div class="textos-noticias-home">
        <h4><?php echo $subtituloNoticiasHome?></h4>
        <h2><?php echo $tituloNoticiasHome?></h2>
    </div>
    <div class="container-carrossel container-card-noticias">
    <div class="owl-carousel owl-theme">
        <?php
            $args = array(
                'post_type' => 'noticias',
                'posts_per_page' => -1,
                'order' => 'asc'
            );

            $loop = new WP_Query($args);
            
            if ($loop->have_posts()) :
                while ($loop->have_posts()) :
                    $loop->the_post(); 
                    
        ?>
        <div class="card-noticia item">
            <div><?php the_post_thumbnail()?></div>
            <div class="texto">
                <h6><?php echo get_the_date();?></h6>
                
                <a href="<?php echo the_permalink();?>">
                    <?php the_title(); ?>
                </a>
            </div>
        </div>

        <?php // Restaurar os dados originais do loop do WordPress
            wp_reset_postdata();
            endwhile;
            
            endif;?>
    </div>
    </div>
</section>


<script>
   $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots:false,
        responsiveClass:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            800:{
                items:2
            },
            1000:{
                items:3
            },
            1400:{
                items:3
            }
        }
    })
</script>

