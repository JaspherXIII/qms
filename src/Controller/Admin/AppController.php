<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use Cake\Controller\Controller;

class AppController extends Controller
{

    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');

        $this->loadComponent('Auth', [
            'loginAction' => [
                'controller' => 'Admins',
                'action' => 'login'
            ],
            'logoutAction' => [
                'controller' => 'Admins',
                'action' => 'logout'
            ],
            'loginRedirect' => [
                'controller' => 'Dashboard',
                'action' => 'index'
            ],
            'logoutRedirect' => [
                'controller' => 'Admins',
                'action' => 'login'
            ],
            'authError' => 'You are not authorized to access that location.',
            'authenticate' => [
                'Form' => [
                    'fields' => [
                        'username' => 'username',
                        'password' => 'password'
                    ],
                    'userModel' => 'Admins'
                ]
            ]
        ]);

        $this->Auth->allow(['login']);

        $this->set('username', $this->Auth->user('username'));

        /*
         * Enable the following component for recommended CakePHP form protection settings.
         * see https://book.cakephp.org/4/en/controllers/components/form-protection.html
         */
        //$this->loadComponent('FormProtection');
    }
}