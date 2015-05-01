<?php

namespace App\Exception;

use Cake\Core\Exception\Exception;

class CustomNotFoundException extends Exception {
  protected $_messageTemplate = 'A página %s não foi encontrada';
}
