<?php

namespace App\Controller\Admin;

class UsersController extends AdminController
{
  public $allowedActions = ['login'];

  public function login () {
    $this->layout = "admin_login";
    if ($this->request->is('post')) {
      $user = $this->Auth->identify();
      if ($user) {
        $this->Auth->setUser($user);
        return $this->redirect($this->Auth->redirectUrl());
      } else {
        $this->Flash->error(
          __('Username or password is incorrect'),
          'default',
          [],
          'auth'
          );
      }
    }
    $images = [
      "/img/admin/alaska.jpg", 
      "/img/admin/bromo.jpg", 
      "/img/admin/tree.jpg", 
    ];
    $image = $images[ rand( 0, count($images) - 1 ) ];
    $this->set(compact("image"));
  }

  public function logout () {
    $this->Auth->logout();
    $this->redirect("/admin");
  }
}