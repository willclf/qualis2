<?php 
/*
Template Name: Card Cursos
*/ 
?>

<?php get_header()?>
<?php 
$imagemBanner = get_field('imagem_background_banner_secundario', 26);
$terms = get_the_terms(get_the_ID(), 'tipo_de_curso');
$periodo = get_field('periodo', 26)
?>
<section>
    <div class="banner-secundario" style="background-image: url('<?php echo $imagemBanner ?>');">
        <h1> <?php the_title(); ?></h1> 
    </div>
         
    <div class="container-single-cursos">
        <div class="textos-noticias-home">
            <?php 
                if ($terms && !is_wp_error($terms)) {
                    $term_names = array();
                    foreach ($terms as $term) {
                        $term_names[] = $term->name;
                    }
                    $term_list = join(', ', $term_names);
                    echo '<h4>' . $term_list . '</h4>';
                }
            ?>
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
        </div>
        <div class="container-info-cursos">
            <?php the_post_thumbnail()?>
            <div class="info-cursos">
                <div>
                    <h3>Período</h3>
                    <p>
                        Matutino: 08h às 12h </br> 
                        Vespertino: 13:30h às 17:30h <br> 
                        Noturno: 18:30h às 22:30h </br> 
                        Diurno aos Sábados: 08h às 17h
                    </p>
                </div>
                <div>
                    <h3>Início das aulas</h3>
                    <p>Diurno aos Sábados: 25/02/2023 </br>
                        Matutino e Noturno: 07/03/2023 </br>
                        Vespertino: 08/03/2023</p>
                </div>
                <div>
                    <h3>Duração</h3>
                    <p>2 anos e 6 meses/1830h</p>
                </div>
                <div>
                    <h3>Requisito</h3>
                    <p>Ensino médio completo ou terminando o ensino médio</p>
                </div>
                <div>
                    <h3>Documentos</h3>
                    <p>
                        Certificado de Conclusão do Ensino; </br>
                        02 foto 3×4; </br>
                        Comprovante de Residência; </br>
                        CPF e RG; </br>
                        Carteira de Vacina;</p>
                </div>
                <div>
                    <h3>Investimento</h3>
                    <p>
                    Taxa de Matrícula - Isento </br>
                    Diurno aos Sábados:</br>
                    37x R$ 382,00</br>
                    Vespertino: </br>
                    31x R$ 412,00</br>
                    Matutino e Noturno:</br>
                    38x R$ 399,00
                    </p>
                </div>
                <div class="btn-redes">
                <a href="" class="btn-increver">Quero me inscrever</a>
                <a href="" class="btn-wpp">Mais Informações <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M13.6683 2.32804C12.9312 1.58718 12.0532 0.999779 11.0855 0.600087C10.1179 0.200395 9.07989 -0.00358408 8.03216 4.76556e-05C3.64221 4.76556e-05 0.0643217 3.56004 0.0643217 7.92802C0.0643217 9.32802 0.434171 10.688 1.12563 11.888L0 16L4.22111 14.896C5.38693 15.528 6.69749 15.864 8.03216 15.864C12.4221 15.864 16 12.304 16 7.93602C16 5.81603 15.1719 3.82404 13.6683 2.32804ZM8.03216 14.52C6.84221 14.52 5.67638 14.2 4.65528 13.6L4.41407 13.456L1.90553 14.112L2.57286 11.68L2.41206 11.432C1.75095 10.3816 1.39991 9.16741 1.39899 7.92802C1.39899 4.29603 4.37387 1.33604 8.02412 1.33604C9.79296 1.33604 11.4573 2.02404 12.7035 3.27204C13.3206 3.88321 13.8096 4.61016 14.1422 5.41077C14.4748 6.21138 14.6444 7.06971 14.6412 7.93602C14.6573 11.568 11.6824 14.52 8.03216 14.52ZM11.6663 9.59202C11.4653 9.49602 10.4844 9.01602 10.3075 8.94402C10.1226 8.88002 9.99397 8.84802 9.85729 9.04002C9.7206 9.24002 9.34271 9.68802 9.23015 9.81602C9.11759 9.95202 8.99698 9.96802 8.79598 9.86402C8.59497 9.76802 7.95176 9.55202 7.19598 8.88002C6.601 8.35202 6.20703 7.70402 6.08643 7.50402C5.97387 7.30403 6.07035 7.20003 6.17487 7.09603C6.26332 7.00803 6.37588 6.86403 6.47236 6.75203C6.56884 6.64003 6.60905 6.55203 6.67337 6.42403C6.73769 6.28803 6.70553 6.17603 6.65729 6.08003C6.60904 5.98403 6.20703 5.00803 6.04623 4.60803C5.88543 4.22404 5.71658 4.27204 5.59598 4.26403H5.21005C5.07337 4.26403 4.86432 4.31203 4.6794 4.51203C4.50251 4.71203 3.98794 5.19203 3.98794 6.16803C3.98794 7.14403 4.70352 8.08802 4.8 8.21602C4.89648 8.35202 6.20703 10.352 8.201 11.208C8.67538 11.416 9.04523 11.536 9.33467 11.624C9.80904 11.776 10.2432 11.752 10.5889 11.704C10.9749 11.648 11.7709 11.224 11.9317 10.76C12.1005 10.296 12.1005 9.90402 12.0442 9.81602C11.9879 9.72802 11.8673 9.68802 11.6663 9.59202Z" fill="white"/>
</svg>
</a>
            </div>
            </div>

        </div>
    </div>
    
                   
</section>

<?php get_template_part('template/home/depoimentos')?>
    <?php get_template_part('template/home/duvidas')?>
    <?php get_template_part('template/home/faixa-de-contato')?>
    <div style="width: 80%; margin: 10px auto">
        <?php get_template_part('parts/cursos')?> 
    </div>
<?php get_footer();?>
