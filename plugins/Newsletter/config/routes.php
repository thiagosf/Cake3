<?php

use Cake\Routing\Router;

Router::prefix('admin', function($routes) {
  $routes->plugin('newsletter', function ($routes) {
    $routes->fallbacks('InflectedRoute');
  });
});
