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
      "http://pixabay.com/get/c50edd5693ce7032e66b/1430006434/elephant-687338_1280.jpg?direct", 
      "http://pixabay.com/get/b17cd5b6c8567a410cf3/1430006473/alaska-69135_1280.jpg?direct", 
      "http://pixabay.com/get/2f863f2ce4a0ae500665/1430006506/bromo-197964_1280.jpg?direct"
    ];
    $image = $images[ rand( 0, count($images) - 1 ) ];
    $this->set(compact("image"));
  }

  public function logout () {
    $this->Auth->logout();
    $this->redirect("/admin");
  }
}