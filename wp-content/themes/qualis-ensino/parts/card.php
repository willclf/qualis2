<section>
    <div class="container-">
    <?php
        $args = array(
            'post_type' => 'card_cursos', // Nome do tipo de postagem personalizado
            'posts_per_page' => -1, // Quantidade de postagens para exibir (-1 para exibir todas)
            'order' => 'asc'
        );

        $loop = new WP_Query($args);
        
        if ($loop->have_posts()) :
            while ($loop->have_posts()) :
                $loop->the_post(); 
                $categorias = get_the_terms(get_the_ID(), 'professor');
                
    ?>
    <div class="card">
        <div><?php the_post_thumbnail()?></div>
        <h2><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
    </div>

    <?php // Restaurar os dados originais do loop do WordPress
        wp_reset_postdata();
        endwhile;
        
        endif;?>
    </div>
</section>