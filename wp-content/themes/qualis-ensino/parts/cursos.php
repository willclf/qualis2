<?php 
$subtituloCursos = get_field('subtitulo_cursos', 2);
$tituloCursos = get_field('titulo_cursos', 2);
$textoCursos = get_field('texto_cursos', 2);
$backgroundCursos = get_field('vetor_background', 2);
?>

<section>
    <div>
        <div class="cabecalho-cursos">
            <div>
                <h4><?php echo $subtituloCursos?></h4>
                <h2><?php echo $tituloCursos?></h2>
            </div>
            <p><?php echo $textoCursos?></p>
        </div>

        <div class="owl-carousel owl-theme">
            <?php
                $args = array(
                    'post_type' => 'card_cursos',
                    'posts_per_page' => -1,
                    'order' => 'asc'
                );

                $loop = new WP_Query($args);
                
                if ($loop->have_posts()) :
                    while ($loop->have_posts()) :
                        $loop->the_post(); 
                        
            ?>
            <div class="card-cursos item">
                <div><?php the_post_thumbnail()?></div>
                <div class="texto-card-curso">
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