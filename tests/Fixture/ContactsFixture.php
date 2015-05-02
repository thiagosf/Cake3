<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

class ContactsFixture extends TestFixture 
{
  public $import = ['table' => 'contacts'];

  public $records = [
    [
      'id' => 1, 
      'name' => 'Lorem ipsum dolor sit amet', 
      'email' => 'email@localhost.com', 
      'message' => 'Lorem ipsum dolor sit amet, aliquet feugiat. ', 
      'created' => '2015-04-25 18:17:20', 
      'updated' => '2015-04-25 18:17:20'
    ], 
    [
      'id' => 2, 
      'name' => 'Lorem ipsum dolor sit amet 2', 
      'email' => 'email@localhost.com', 
      'message' => 'Lorem ipsum dolor sit amet, aliquet feugiat. ', 
      'created' => '2015-04-25 18:17:20', 
      'updated' => '2015-04-25 18:17:20'
    ], 
  ];
}
