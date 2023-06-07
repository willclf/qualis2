<?php 
$textoBanner = get_field('texto_do_banner', 2);
$imagemBanner = get_field('imagem_banner', 2);
$backgroundBanner = get_field('background_banner', 2);
$formularioBanner = get_field('formulario_banner', 2);
?>



<section>
    <div class="banner-home" style="background-image: url('<?php echo $backgroundBanner ?>');">
        <div class="content-banner">
            <h1> <?php echo $textoBanner?></h1> 
            <div class="form-banner">
                <div>
                    <?php echo $formularioBanner?>
                </div>
            </div>
        </div>
        <img src="<?php echo $imagemBanner ?>" alt="">
    </div>
</section>