<?php
if (!defined('WPINC')) {
    die;
}

class Theme_Wp_Gutenberg {
    public function __construct() {
        add_action('after_setup_theme', [$this, 'gutenberg_colors']);
        add_action('after_setup_theme', [$this, 'gutenberg_gradients']);
    }

    /**
     * Gutenberg colors
     */
    public function gutenberg_colors() {
        // Disable Custom Colors
        add_theme_support('disable-custom-colors');

        // Editor Color Palette
        add_theme_support('editor-color-palette', [
            [
                'name'  => 'Główny',
                'slug'  => 'main',
                'color'	=> '#02504F'
            ],
            [
                'name'  => 'Dopełniający',
                'slug'  => 'second',
                'color' => '#B68C5A'
            ],
            [
                'name'  => 'Mono 1',
                'slug'  => 'mono1',
                'color'	=> '#F5F5F5'
            ],
            [
                'name'  => 'Mono 2',
                'slug'  => 'mono2',
                'color'	=> '#D2D2D2'
            ],
            [
                'name'  => 'Mono 3',
                'slug'  => 'mono3',
                'color'	=> '#9E9E9E'
            ],
            [
                'name'  => 'Czarny',
                'slug'  => 'black',
                'color'	=> '#000000'
            ],
            [
                'name'  => 'Biały',
                'slug'  => 'white',
                'color'	=> '#FFFFFF'
            ],
        ]);
    }

    public function gutenberg_gradients()
    {
    }
}

new Theme_Wp_Gutenberg();
