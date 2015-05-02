<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ContactsController;
use Cake\TestSuite\IntegrationTestCase;

class ContactsControllerTest extends IntegrationTestCase
{
  public $fixtures = ['app.contacts'];

  public function setUp () {
    parent::setUp();
    $this->session(['Auth.User.id' => 1]);
  }
 
  public function testIndex() {
    $this->get('/admin/contacts?page=1');
    $this->assertResponseOk();
  }
}
