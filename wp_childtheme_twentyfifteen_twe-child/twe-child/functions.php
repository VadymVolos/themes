<?php
// Custom Functions Go Below

// Добавляю еще одно меню. Чтоб его вывести добавил в footer.php:
// <===?php wp_nav_menu( array( 'theme_location' => 'menu2-footer-copy-v', 'container_class' => 'menu2-footer-copy-v' ) ); ?===>		
if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
			array(
				'menu2-footer-copy-v' => 'Нижнеее меню - выводится снизу возле копирайта',
				)
	);
}