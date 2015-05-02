<?php 

namespace ContactManager\Controller\Admin;

use App\Controller\Admin\AdminController;
use Aura\Intl\Package;
use Cake\I18n\I18n;

class ContactManagerController extends AdminController {
  public function index () {
    // Usar para traducoes salvas no banco de dados
    I18n::translator('contact_manager', 'pt_BR', function () {
      $package = new Package(
        'default',
        'default'
      );
      $package->setMessages([
        'Contact manager' => 'Gerencimanto de contatos',
        'Plugin Contact Manager' => 'Plugin para Gerencimanto de Contatos',
        'Complete contact manager' => 'Gerenciador de contatos completo',
        'Date and number translates' => 'Traduções de datas e números',
      ]);
      return $package;
    });
    $this->log("Debugg`s is on the table", "debug");
    $this->log("Fatal error!", "error");
  }
}