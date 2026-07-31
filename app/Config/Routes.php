<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// without locale
$routes->get('solutions/mart', 'Home::solutionsMart');
$routes->get('solutions/page', 'Home::solutionsPage');
$routes->get('pricing', 'Home::pricing');
$routes->get('contact', 'Home::contact');
$routes->get('leadership', 'Home::leadership');
$routes->get('choose-region', 'Home::chooseRegion');
$routes->get('terms-and-conditions', 'Home::termsAndConditions');
$routes->get('privacy-policy', 'Home::privacyPolicy');
$routes->get('coming-soon', 'Home::comingSoon');
$routes->get('sitemap.xml', 'Home::sitemap');
// with locale
$routes->group('{locale}', ['filter' => 'localeGuard'], static function($routes) {
    $routes->get('solutions/mart', 'Home::solutionsMart');
    $routes->get('solutions/page', 'Home::solutionsPage');
    $routes->get('pricing', 'Home::pricing');
    $routes->get('contact', 'Home::contact');
    $routes->get('leadership', 'Home::leadership');
    $routes->get('choose-region', 'Home::chooseRegion');
    $routes->get('terms-and-conditions', 'Home::termsAndConditions');
    $routes->get('privacy-policy', 'Home::privacyPolicy');
    $routes->get('coming-soon', 'Home::comingSoon');
    $routes->get('/', 'Home::index');
});
$routes->get('/', 'Home::index');
// post
$routes->post('contact-submit', 'Home::contactForm');

$routes->set404Override('App\Controllers\Home::show404');