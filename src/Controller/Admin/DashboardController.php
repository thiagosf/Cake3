<?php
namespace App\Controller\Admin;

use Cake\Cache\Cache;

/**
 * Dashboard Controller
 *
 * @property \App\Model\Table\DashboardTable $Dashboard
 */
class DashboardController extends AdminController
{
  
  /**
   * Index method
   *
   * @return void
   */
  public function index() {
    $value = 1;
    $data = Cache::remember("cache-data", function () use ($value) {
      $data = ["title" => "Algum", "text" => "Lorem ipsum", "value" => $value];
      return $data;
    });
    $this->set("data", $data);
  }
}
