<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// $routes->get('/', 'Home::index');

$routes->group('admin', ['namespace' => 'App\Controllers\Admin'], function($routes) {
    $routes->get('job_posts', 'JobPostController::index');
    $routes->get('job_posts/create', 'JobPostController::create');
    $routes->post('job_posts/store', 'JobPostController::store');
    $routes->get('job_posts/edit/(:num)', 'JobPostController::edit/$1');
    $routes->post('job_posts/update/(:num)', 'JobPostController::update/$1');
    $routes->get('job_posts/applications/(:num)', 'JobPostController::applications/$1');
    $routes->post('job_posts/update_phase/(:num)', 'JobPostController::update_phase/$1');
    $routes->get('applications', 'JobPostController::allApplications'); // Nueva ruta para ver todas las aplicaciones
});

$routes->get('/', 'JobPostController::index');
$routes->get('job_posts/show/(:num)', 'JobPostController::show/$1');
$routes->get('job_posts/apply/(:num)', 'JobPostController::apply/$1');
$routes->post('job_posts/save/(:num)', 'JobPostController::save/$1');