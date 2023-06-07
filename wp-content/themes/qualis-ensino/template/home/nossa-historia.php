<?php 
$subtituloHistoria = get_field('subtitulo_historia', 2);
$tituloHistoria = get_field('titulo_historia', 2);
$textoHistoria = get_field('texto_historia', 2);
$linkHistoria = get_field('link_historia', 2);
$imagemUm = get_field('imagem_1', 2);
$imagemDois = get_field('imagem_2', 2);
$imagemLogo = get_field('imagem_logo', 2);
$imagemVetor = get_field('imagem_vetor', 2);
?>


<section class="container-historia">
    <div class="conteudo-historia">
        <div class="imagens-historia">
            <div class="img-logo"><img src="<?php echo $imagemLogo ?>" alt=""></div>
            <div class="img-1"><img src="<?php echo $imagemUm ?>" alt=""></div>
            <div class="img-2"><img src="<?php echo $imagemDois ?>" alt=""></div>
        </div>
        <div class="textos-historia">
            <h4><?php echo $subtituloHistoria ?></h4>
            <h2><?php echo $tituloHistoria?></h2>
            <p><?php echo $textoHistoria?></p>
            <a href="<?php echo $linkHistoria?>">Leia mais</a>
        </div>
    </div>
</section>