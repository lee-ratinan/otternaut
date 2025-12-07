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
$routes->get('{locale}/pricing', 'Home::pricing');
$routes->get('{locale}/contact', 'Home::contact');
$routes->get('{locale}/terms-and-conditions', 'Home::termsAndConditions');
$routes->get('{locale}/privacy-policy', 'Home::privacyPolicy');
// home
$routes->get('{locale}', 'Home::index');
$routes->get('/', 'Home::index');
// post
$routes->post('contact-submit', 'Home::contactForm');
