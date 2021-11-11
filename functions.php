<?php
function registeer_widgets() {
    register_sidebar(
        array(
        'id' => 'zijkant_widget',
        'name' => "Mijn zijkant widget",
        )
    );
}
add_action( 'widgets_init', 'registeer_widgets' );
?>

<?php

function registeer_menus() {
    register_nav_menu('hoofdmenu', 'Mijn Hoofdmenu');
}
add_action( 'init', 'registeer_menus' );

?>
