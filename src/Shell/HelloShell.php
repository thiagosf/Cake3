<?php

namespace App\Shell;

use Cake\Console\Shell;

class HelloShell extends Shell
{
  public function initialize()
  {
    parent::initialize();
    $this->loadModel('Posts');
  }

  public function main()
  {
    $color = $this->in('Qual sua cor favorita?');
    $this->out("Sua cor: {$color}");
    $this->hr();

    $city = $this->in('Em que cidade mora?');
    $this->out("Sua cidade: {$city}");
    $this->hr();

    $this->out('Exibindo todos os posts');
    $posts = $this->Posts->find("all");
    $this->out(count($posts));
  }
}
