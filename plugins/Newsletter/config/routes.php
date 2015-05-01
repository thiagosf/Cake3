<?php

use Cake\Routing\Router;

Router::prefix('admin', function($routes) {
  $routes->plugin('Newsletter', function ($routes) {
    $routes->connect(
      '/administrar-boletins', 
      ["controller" => "Newsletter", "action" => "index"], 
      ["_name" => "boletins"]
    );
    $routes->fallbacks('InflectedRoute');
  });
});
