<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Posts Controller
 *
 * @property \App\Model\Table\PostsTable $Posts
 */
class PostsController extends AppController
{
  
  /**
   * Index method
   *
   * @return void
   */
  public function index() {
    $this->paginate['contain'] = ['Categories'];
    $this->set('posts', $this->paginate($this->Posts));
    $this->set('_serialize', ['posts']);
  }
  
  /**
   * View method
   *
   * @param string|null $id Post id.
   * @return void
   * @throws \Cake\Network\Exception\NotFoundException When record not found.
   */
  public function view($id = null) {
    $post = $this->Posts->get($id, ['contain' => ['Categories']]);
    $this->set('post', $post);
    $this->set('_serialize', ['post']);
  }
  
  /**
   * Add method
   *
   * @return void Redirects on successful add, renders view otherwise.
   */
  public function add() {
    $post = $this->Posts->newEntity();
    if ($this->request->is('post')) {
      $post = $this->Posts->patchEntity($post, $this->request->data);
      if ($this->Posts->save($post)) {
        $this->Flash->success('The post has been saved.');
        return $this->redirect(['action' => 'index']);
      } 
      else {
        $this->Flash->error('The post could not be saved. Please, try again.');
      }
    }
    
    $this->set(compact('post'));
    $this->set('_serialize', ['post']);
    
    $this->_setOptions();
  }
  
  /**
   * Edit method
   *
   * @param string|null $id Post id.
   * @return void Redirects on successful edit, renders view otherwise.
   * @throws \Cake\Network\Exception\NotFoundException When record not found.
   */
  public function edit($id = null) {
    $post = $this->Posts->get($id, ['contain' => []]);
    if ($this->request->is(['patch', 'post', 'put'])) {
      $post = $this->Posts->patchEntity($post, $this->request->data);
      if ($this->Posts->save($post)) {
        $this->Flash->success('The post has been saved.');
        return $this->redirect(['action' => 'index']);
      } 
      else {
        $this->Flash->error('The post could not be saved. Please, try again.');
      }
    }
    $this->set(compact('post'));
    $this->set('_serialize', ['post']);
    
    $this->_setOptions();
  }
  
  /**
   * Delete method
   *
   * @param string|null $id Post id.
   * @return void Redirects to index.
   * @throws \Cake\Network\Exception\NotFoundException When record not found.
   */
  public function delete($id = null) {
    $this->request->allowMethod(['post', 'delete']);
    $post = $this->Posts->get($id);
    if ($this->Posts->delete($post)) {
      $this->Flash->success('The post has been deleted.');
    } 
    else {
      $this->Flash->error('The post could not be deleted. Please, try again.');
    }
    return $this->redirect(['action' => 'index']);
  }
  
  protected function _setOptions() {
    $categories = $this->Posts->Categories->find("list");
    $this->set(compact('categories'));
  }
}
