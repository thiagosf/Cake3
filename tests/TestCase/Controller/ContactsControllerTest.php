<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ContactsController;
use Cake\TestSuite\IntegrationTestCase;

class ContactsControllerTest extends IntegrationTestCase
{
  public $fixtures = ['app.contacts'];

  public function setUp () {
    parent::setUp();

    // Foca autenticacao no admin
    $this->session(['Auth.User.id' => 1]);
  }
 
  public function testIndex() {
    $this->get('/admin/contacts?page=1');
    $this->assertResponseOk();
  }
  
  public function testIndexJson() {
    $this->configRequest([
      'headers' => ['Accept' => 'application/json'],
    ]);
    $this->get('/admin/contacts.json');
    $this->assertResponseOk();

    $expected = ['contacts' => [
      [
        'id' => 1, 
        'name' => 'Lorem ipsum dolor sit amet', 
        'email' => 'email@localhost.com', 
        'message' => 'Lorem ipsum dolor sit amet, aliquet feugiat.', 
        'created' => '2015-04-25T18:17:20-0300', 
        'updated' => '2015-04-25T18:17:20-0300',
      ],
      [
        'id' => 2, 
        'name' => 'Lorem ipsum dolor sit amet', 
        'email' => 'email@localhost.com', 
        'message' => 'Lorem ipsum dolor sit amet, aliquet feugiat.', 
        'created' => '2015-04-25T18:17:20-0300', 
        'updated' => '2015-04-25T18:17:20-0300',
      ],
    ]];
    $expected = json_encode($expected, JSON_PRETTY_PRINT);
    $this->assertEquals($expected, $this->_response->body());
  }
}
