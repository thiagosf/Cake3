<?php

namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Validation\Validator;
use App\Model\Validation\ContactValidator;

class ContactForm extends Form {
  protected function _buildSchema(Schema $schema) {
    return $schema
            ->addField('name', 'string')
            ->addField('email', ['type' => 'string'])
            ->addField('message', ['type' => 'text']);
  }
  
  protected function _buildValidator(Validator $validator) {
    return new ContactValidator();
  }
  
  protected function _execute(array $data) {
    // send an email
    return true;
  }

  public function setErrors($errors) {
    $this->_errors = $errors;
  }
}
