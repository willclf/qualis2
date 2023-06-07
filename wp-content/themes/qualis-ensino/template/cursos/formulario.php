<?php 
$formularioBanner = get_field('formulario_banner', 2);
$formCursos = get_field('formulario_busca', 26);
?>



<section class="grid-cursos">
    <div class="container-form-cursos">
        <h2>Encontre os nossos cursos</h2>
        <div class="form-banner form-cursos">
            <?php echo $formularioBanner ?>
        </div>
    </div>
    <?php echo $formCursos ?>
</section>