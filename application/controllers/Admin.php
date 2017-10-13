<?php
require_once(APPPATH . 'controllers/AK_Admin_Controller.php');

class Admin extends AK_Admin_Controller
{
    public function index()
    {
        $data = ['breadcrumbs' => ['Admin']];
        $this->render($data);
    }
}
