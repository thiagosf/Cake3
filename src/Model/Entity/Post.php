<?php 

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Post extends Entity {
  public function link () {
    return "/posts/{$this->slug}";
  }
}
