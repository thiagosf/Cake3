<?php

/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link    http://cakephp.org CakePHP(tm) Project
 * @since   0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\ORM\TableRegistry;
use Cake\Network\Email\Email;
use App\Exception\CustomNotFoundException;
use Cake\Utility\Security;
use Cake\Collection\Collection;
use Cake\Utility\Hash;
use Cake\I18n\Time;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link http://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{
  
  /**
   * Displays a view
   *
   * @return void|\Cake\Network\Response
   * @throws \Cake\Network\Exception\NotFoundException When the view file could not
   *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
   */
  public function display() {
    $path = func_get_args();
    
    $count = count($path);
    if (!$count) {
      return $this->redirect('/');
    }
    $page = $subpage = null;
    
    if (!empty($path[0])) {
      $page = $path[0];
    }
    if (!empty($path[1])) {
      $subpage = $path[1];
    }
    $this->set(compact('page', 'subpage'));
    
    try {
      $this->render(implode('/', $path));
    }
    catch(MissingTemplateException $e) {
      if (Configure::read('debug')) {
        throw $e;
      }
      throw new NotFoundException();
    }
  }

  public function api () {

    // Usando tabela com entidade
    $posts = TableRegistry::get("Posts");
    $data = $posts->find()->where(["publish_date <= NOW()"])->all();
    foreach ( $data as $item ) {
      pr($item->title);
      pr($item->link());
      pr($item->toArray());
      pr("---------------");
    }
    exit;

    $this->response->type("json");
    $this->response->body(json_encode($data));
    return $this->response;
  }

  public function email () {
    $email = new Email('default');
    $email->template("welcome", "fancy")
      ->viewVars(['data' => ['name' => 'João']])
      ->emailFormat('html')
      ->from(['me@example.com' => 'My Site'])
      ->to('you@example.com')
      ->subject('About')
      ->send('My message');
    $output = $email;

    $this->response->body( implode('', $output->message()) );
    return $this->response;
  }

  public function custom_exception () {
    throw new CustomNotFoundException(["page" => "test"]);
  }

  public function secutiry () {
    $value = 123;
    $key = 'wt1U5MACWJFTXGenFoZoiLwQGrLgdbHA';
    $result = Security::encrypt($value, $key);
    $decrypt = Security::decrypt($result, $key);

    pr("----------------------------------------");
    pr("Security::encrypt e Security::decrypt");
    pr("----------------------------------------");
    pr("Key: {$key}");
    pr("Value: {$value}");
    pr("Crypt: {$result}");
    pr("Decrypt: {$decrypt}");

    $value = 'CakePHP Framework';
    $sha1 = Security::hash($value, 'sha1', true);
    pr("Value: {$value}");
    pr("Sha1 com salt do app.php: {$sha1}");

    exit;
  } 

  public function collection () {
    $people = [
      ['name' => 'João', 'age' => 20], 
      ['name' => 'Andradina', 'age' => 45], 
      ['name' => 'Maria', 'age' => 15], 
      ['name' => 'Ulissis', 'age' => 5], 
      ['name' => 'Armandus', 'age' => 63], 
    ];
    $collection = new Collection($people);
    $group = $collection->sortBy('name', SORT_ASC, SORT_NATURAL)->groupBy(function($person) {
      return mb_strtoupper($person['name'][0]);
    });

    pr('------------------------------');
    pr('Pessoas');
    pr('------------------------------');
    pr($people);
    
    pr('------------------------------');
    pr('Agrupando pela primeira letra do nome');
    pr('------------------------------');
    pr($group->toArray());
    
    pr('------------------------------');
    pr('Hash::extract');
    pr('------------------------------');
    pr(Hash::extract($group->toArray(), '{s}.{n}.name'));
    
    exit;
  }

  public function time () {
    $time = '18/12/2015 16:58:54';
    $now = Time::createFromFormat('d/m/Y H:i:s', $time);

    pr('------------------------------');
    pr('Convertendo data');
    pr('------------------------------');
    pr($time);
    pr($now->format('Y-m-d H:i:s'));

    pr('------------------------------');
    pr('Manipulando (adicionando 5 dias)');
    pr('------------------------------');
    $now->modify('+5 days');
    pr($now->format('Y-m-d H:i:s'));

    exit;
  }
}
