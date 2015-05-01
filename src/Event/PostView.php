<?php

namespace App\Event;

use Cake\Event\EventListenerInterface;

class PostView implements EventListenerInterface {
  public function implementedEvents() {
    return [
      'Controller.Posts.view' => [
        'callable' => 'view',
        'priority' => 100
      ]
    ];
  }
  public function view($event, $post) {
    $post->title = $post->title . " [com EventListenerInterface agora]";

    // Parando proximos ouvintes
    $event->stopPropagation();
  }
}
