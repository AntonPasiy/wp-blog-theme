<?php
/**
 * Подключает единственный собственный CSS.
 * Правила нельзя выразить настройками блоков: высота относительно экрана,
 * ширина подписи отдельно от кадра и отступ шапки под панелью администратора.
 */

add_action(
	'wp_enqueue_scripts',
	static function () {
		wp_enqueue_style(
			'anton-pasiy',
			get_stylesheet_directory_uri() . '/assets/css/layout.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);
	}
);
