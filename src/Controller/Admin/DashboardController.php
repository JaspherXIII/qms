<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;
use Cake\ORM\TableRegistry;

class DashboardController extends AppController
{
    public function index()
    {
        $this->viewBuilder()->setLayout('admin');

        $usersTable = TableRegistry::getTableLocator()->get('Users');
        $appointmentsTable = TableRegistry::getTableLocator()->get('Appointments');

        $totalUsers = $usersTable->find()->count();
        $totalAppointments = $appointmentsTable->find()->count();

        $this->set(compact('totalUsers', 'totalAppointments'));
    }
}
