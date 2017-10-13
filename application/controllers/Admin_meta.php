<?php
require_once(APPPATH . 'controllers/AK_Admin_Controller.php');


class Admin_meta extends AK_Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('meta_model');
    }

    public function index($typeId)
    {
        $metaData = $this->meta_model->getData($typeId);
        $convenientData = $this->makeConvenientArray($metaData, ['file']);
        $type = $metaData[0]['type'];
        $data = [
            'breadcrumbs' => [
                'Meta ' . ucfirst($type),
            ],
            'meta' => $convenientData,
            'type' => $type
        ];

        if (!empty($_POST)) {
            $message = 'Info successfully updated';
               $this->meta_model->save($typeId);
                $this->session->set_flashdata('msg', ['status' => 'success', 'msg' => $message]);
                redirect('admin_meta/index/' . $typeId);
        }

        $this->render($data);
    }




}