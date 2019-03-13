<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Admin Controller
 *
 */
class AdminController extends AppController
{

  public function index()
  {
    $this->set(compact('users'));
  }

  public function initialize()
  {
      parent::initialize();

      $this->loadComponent('RequestHandler', [
          'enableBeforeRedirect' => false,
      ]);

      $this->loadComponent('Auth', [
          'authenticate' => ['Form'],
      ]);
      // $this->Flash->error(__('The user could not be saved. Please, try again.'));
      // var_dump($this->Auth->_config['authenticate']['Form']['role']);
      // var_dump($this->Auth);
      // if ($this->Auth) {
        // var_dump($this->Auth);
      // }
      // $this->Auth->deny();
      $this->loadComponent('Flash');
  }
}
