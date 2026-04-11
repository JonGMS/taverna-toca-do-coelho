<?php
define('BASE_URL', '/taverna-toca-do_coelho/public/assets/img/');
define('INDEX_URL', '/taverna-toca-do_coelho/public/');
?>

<div class="header_menu">
    <div class="header_menu__buttons">
        <div class="menu_left">
            <div class="button"><a href="">COMANDA</a></div>
            <div class="button"><a href="">CARDÁPIO</a></div>
            <div class="button"><a href="">DRINKS</a></div>
            <div class="button"><a href="">JOGOS</a></div>
        </div>

        <div class="menu_icon">
            <a href="<?php echo INDEX_URL . 'index.php' ?>"><img src="<?php echo BASE_URL . 'Logo.png'; ?>" alt="Logo da Empresa"></a>
        </div>

        <div class="menu_right">
            <div class="button"><a href="">INGREDIENTE</a></div>
            <div class="button"><a href="">CLIENTE</a></div>
            <div class="button"><a href="../app/View/funcionario/funcionario.php">FUNCIONÁRIO</a></div>
        </div>
    </div>

</div>