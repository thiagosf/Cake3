<?php

namespace App\Controller\Admin;

class UsersController extends AdminController
{
  public $allowedActions = ['login'];

  public function login () {
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
  }

  public function logout () {
    $this->Auth->logout();
    $this->redirect("/admin");
  }
}