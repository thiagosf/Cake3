<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Dashboard Controller
 *
 * @property \App\Model\Table\DashboardTable $Dashboard
 */
class AdminController extends AppController
{
  public $layout = "admin";
  
  public function initialize() {
  parent::initialize();
  }
}
