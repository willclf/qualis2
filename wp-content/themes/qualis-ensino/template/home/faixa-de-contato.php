<?php 
$tituloFaixa = get_field('titulo_da_faixa', 2);
$textoFaixa = get_field('texto_da_faixa', 2);
$backgroundFaixa = get_field('background_faixa', 2);
$formularioFaixa = get_field('formulario_da_faixa', 2);
?>

<section class="faixa-contato">
    <div>
        <h2><?php echo $tituloFaixa ?></h2>
        <h4><?php echo $textoFaixa ?></h4>
    </div>
    <div class="formulario">
        <?php echo $formularioFaixa?>
    </div>
</section>