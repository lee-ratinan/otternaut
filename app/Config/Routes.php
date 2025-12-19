<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// without locale
$routes->get('pricing', 'Home::pricing');
$routes->get('contact', 'Home::contact');
$routes->get('terms-and-conditions', 'Home::termsAndConditions');
$routes->get('privacy-policy', 'Home::privacyPolicy');
$routes->get('sitemap.xml', 'Home::sitemap');
// with locale
$routes->group('{locale}', ['filter' => 'localeGuard'], static function($routes) {
    $routes->get('pricing', 'Home::pricing');
    $routes->get('contact', 'Home::contact');
    $routes->get('terms-and-conditions', 'Home::termsAndConditions');
    $routes->get('privacy-policy', 'Home::privacyPolicy');
    $routes->get('/', 'Home::index');
});
$routes->get('/', 'Home::index');
// post
$routes->post('contact-submit', 'Home::contactForm');

$routes->set404Override('App\Controllers\Home::show404');