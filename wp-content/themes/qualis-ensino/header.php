<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qualis Ensino</title>
    <?php wp_head(); ?>
</head>
<body>
    
<header>
    
    <div class="header">
        <a href="/"><img src="<?php echo get_image('logo.png'); ?>" alt="logo"></a>
        <nav class="menu-top-desk">
            <?php wp_nav_menu(array(
                'menu' => 'Menu Top'
            ));?>
        </nav>
        <div class="menu-mobile" onclick="menuMobile()"><svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 448 512"><path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg></div>
        
    </div>
    <div class="conteudo-menu-mobile">
        <nav class="">
            <?php wp_nav_menu(array(
                'menu' => 'Menu Top'
            ));?>
        </nav>
    </div>
</header>