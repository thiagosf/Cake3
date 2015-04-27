<?php
use Cake\Routing\Router;

Router::plugin('ContactManager', function ($routes) {
  $routes->prefix("admin", function($routes) {
    $routes->fallbacks();
  });
});
