<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Post Entity.
 */
class Post extends Entity
{

  /**
   * Fields that can be mass assigned using newEntity() or patchEntity().
   *
   * @var array
   */
  protected $_accessible = [
    'category_id' => true,
    'title' => true,
    'slug' => true,
    'publish_date' => true,
    'body' => true,
  ];
}
