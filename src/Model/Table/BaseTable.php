<?php 

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Utility\Inflector;
use Cake\Datasource\ConnectionManager;

class BaseTable extends Table {
  public function initialize (array $config) {
  // Obs.: pra usar bake nao funciona adicionar prefixo
  // pois nao encontra a tabela relacionada

  // parent::initialize($config);
  // $connection = ConnectionManager::get('default');
  // $connection_config = $connection->config();
  // $this->table_prefix = null;
  // if ( ! empty($connection_config['prefix']) ) {
  //   $this->table_prefix = $connection_config['prefix'];
  //   $this->table($this->table_prefix . Inflector::tableize($config['alias']));
  // }
  }
}
