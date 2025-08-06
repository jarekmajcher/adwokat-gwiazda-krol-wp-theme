<?php
if (!defined('WPINC')) {
    die;
}

use Timber\Timber;

$context = Timber::context();
$context['title'] = __('404 - strona nie istnieje', 'adwokat-gwiazda-krol');

Timber::render('@rwd/404.twig', $context);
