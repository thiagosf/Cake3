<?php

namespace App\View\Cell;

use Cake\View\Cell;

class InboxCell extends Cell 
{
  public function display() {
    $token = $this->request->param('_csrfToken');
    $this->set("token", $token);
  }
}