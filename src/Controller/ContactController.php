<?php

namespace App\Controller;

use App\Controller\AppController;
use App\Form\ContactForm;
use Cake\Event\Event;

class ContactController extends AppController {
  public function initialize () {
    parent::initialize();
    $this->loadComponent('Csrf');
  }

  public function index () {
    $contact = new ContactForm();
    if ( $this->request->is("post") ) {
      if ( $contact->execute($this->request->data) ) {
        $this->Flash->success(__("We will get back to you soon."));
      } else {
        $this->Flash->error(__("There was a problem submitting your form"));
      }
    }
    $this->set("contact", $contact);
  }
}
