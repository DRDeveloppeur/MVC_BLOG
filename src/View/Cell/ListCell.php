<?php
namespace App\View\Cell;

use Cake\View\Cell;

/**
 * List cell
 */
class ListCell extends Cell
{

    /**
     * List of valid options that can be passed into this
     * cell's constructor.
     *
     * @var array
     */
    protected $_validCellOptions = [];

    /**
     * Initialization logic run at the end of object construction.
     *
     * @return void
     */
    public function initialize()
    {
    }

    /**
     * Default display method.
     *
     * @return void
     */
    public function display()
    {
      $this->loadModel('Billets');
      $this->loadModel('Categories');
      $billets = $this->Billets->find('all')->limit(10)->select(['id', 'title', 'tags']);
      $categories = $this->Categories->find('all');
      $this->set(compact('billets', 'categories'));
    }

    public function admin()
    {
      $this->loadModel('Users');
      $this->loadModel('Billets');
      $billets = $this->Billets->find('all')->limit(10)->select(['id', 'title', 'tags']);
      $users = $this->Users->find('all')->limit(10)->select(['id', 'username']);
      $this->set(compact('billets', 'users'));
    }
}
