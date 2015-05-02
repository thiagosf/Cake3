<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContactsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

class ContactsTableTest extends TestCase
{
  public $fixtures = ['app.contacts'];
  
  public function setUp() {
    parent::setUp();
    $config = TableRegistry::exists('Contacts') ? [] : ['className' => 'App\Model\Table\ContactsTable'];
    $this->Contacts = TableRegistry::get('Contacts', $config);
  }
  
  public function tearDown() {
    unset($this->Contacts);
    parent::tearDown();
  }
  
  public function testAdd() {
    $data = [
      "name" => "Joao Silveiras", 
      "email" => "joao@gmail.com", 
      "message" => "Mensagem legal", 
    ];
    
    $contact = $this->Contacts->newEntity();
    $contact = $this->Contacts->patchEntity($contact, $data);
    $result = $this->Contacts->save($contact);
        
    $this->assertEquals(true, ! empty($result->id));
  }
  
  public function testFindRecord() {
    $query = $this->Contacts
              ->find()
              ->select(['email'])
              ->where(["email" => "email@localhost.com"]);
    $this->assertInstanceOf('Cake\ORM\Query', $query);

    $result = $query->first()->toArray();
    $expected = ['email' => 'email@localhost.com'];
    $this->assertEquals($expected, $result);
  }
  
  public function testValidationDefault() {
    $data = [
      "name" => "Joao Silveiras", 
      "email" => "joao@gmail.com", 
      "message" => "Mensagem legal", 
    ];
    
    $contact = $this->Contacts->newEntity($data);
    $this->assertEquals(true, empty($contact->errors()));

    $data['email'] = 'aaa';
    $contact = $this->Contacts->newEntity($data);
    $this->assertEquals(false, empty($contact->errors()));
  }
}
