<?php 
$subtituloCursos = get_field('subtitulo_cursos', 2);
$tituloCursos = get_field('titulo_cursos', 2);
$textoCursos = get_field('texto_cursos', 2);
$backgroundCursos = get_field('vetor_background', 2);
?>

<section class="container-cursos">
    <div class="categorias">
        <?php
        $taxonomies = get_taxonomies();

   
        foreach ($taxonomies as $taxonomy) {
            $terms = get_terms($taxonomy); 

            if (!empty($terms)) {
                echo '<ul>';
                foreach ($terms as $term) {
                    echo '<li>' . $term->name . '</li>';
                }
                echo '</ul>';
            }
        }

        ?>
    </div>

    <div class="conteudo-cards-cursos">

        <div class="container-cards">
            <?php
                $args = array(
                    'post_type' => 'card_cursos',
                    'posts_per_page' => -1,
                    'order' => 'desc'
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