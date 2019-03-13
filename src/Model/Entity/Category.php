<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Category Entity
 *
 * @property int $id
 * @property string $name
 * @property string $title
 * @property int $post_count
 *
 * @property \App\Model\Entity\Billet[] $billets
 */
class Category extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'title' => true,
        'post_count' => true,
        'billets' => true
    ];

    public function _getUrl()
    {
      return ['controller' => 'Billets', 'action' => 'index', 'category' => $this->title];
    }
}
