<?php 
/*
Template Name: Blog
*/ 
?>
<?php 
$textoBanner = get_field('texto_banner_secundario', 26);
$imagemBanner = get_field('imagem_background_banner_secundario', 26);
?>

<?php get_header()?>

<section>
    <div class="banner-secundario" style="background-image: url('<?php echo $imagemBanner ?>');">

        <h1> 404. Não encontrado</h1> 

</section>

<?php get_footer();?>
