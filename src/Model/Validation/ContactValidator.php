<?php 

namespace App\Model\Validation;

use Cake\Validation\Validator;

class ContactValidator extends Validator {
  public function __construct() {
    parent::__construct();
    $this->add('name', 'length', [
      'rule' => ['minLength', 10], 
      'message' => 'A name is required'
    ]);
    $this->add('email', 'format', [
      'rule' => 'email', 
      'message' => 'A valid email address is required', 
    ]);
    $this->add('body', 'custom', [
      'rule' => [$this, 'customValidate'], 
      'message' => 'Custom validate (minimum 5 chars)', 
    ]);
  } 

  public function customValidate ($value, $options) {
    return strlen($value) >= 5;
  }
}