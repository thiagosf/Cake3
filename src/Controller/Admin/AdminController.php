<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Auth\DefaultPasswordHasher;

/**
 * Dashboard Controller
 *
 * @property \App\Model\Table\DashboardTable $Dashboard
 */
class AdminController extends AppController
{
  public $layout = "admin";

  public $components = [
    'Auth' => [
      'userModel' => 'User',
      'authorize' => 'Controller',
    ],
  ];
  
  public function initialize() {
    parent::initialize();
  }
}
