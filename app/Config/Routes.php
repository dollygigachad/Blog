<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Rotas para Posts
$routes->group('post', function($routes){
    $routes->get('/', 'Post::index');
    $routes->get('create', 'Post::create');
    $routes->post('store', 'Post::store');
    $routes->get('view/(:num)', 'Post::view/$1');
    $routes->get('edit/(:num)', 'Post::edit/$1');
    $routes->get('excluir/(:num)', 'Post::excluir/$1');
    $routes->get('sucesso', 'Post::sucesso');
});

// Rotas para Comentários
$routes->group('comentario', function($routes){
    $routes->post('store', 'Comentario::store');
});
