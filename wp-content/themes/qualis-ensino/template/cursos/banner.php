<?php 
$textoBanner = get_field('texto_banner_secundario', 26);
$imagemBanner = get_field('imagem_background_banner_secundario', 26);
?>



<section>
    <div class="banner-secundario" style="background-image: url('<?php echo $imagemBanner ?>');">

        <h1> <?php echo $textoBanner?></h1> 

</section>