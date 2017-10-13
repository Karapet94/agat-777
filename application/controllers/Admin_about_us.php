<?php
require_once(APPPATH . 'controllers/AK_Admin_Controller.php');


class Admin_about_us extends AK_Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('about_us_model');
    }

    public function index()
    {
        $aboutUSData = $this->about_us_model->getData();
        $convenientData = $this->makeConvenientArray($aboutUSData, ['file']);

        $data = [
            'additional_js_files' => [
                'pages/admin_about_us/index'
            ],
            'breadcrumbs' => [
                'About us',
            ],
            'aboutUsData' => $convenientData
        ];

        $this->render($data);
    }

    public function save()
    {
        $message = 'Text of About us successfully updated';
        $this->session->set_flashdata('msg', ['status' => 'success', 'msg' => $message]);
        $this->about_us_model->save($_POST['content']);
        echo json_encode(['status' => 'success']);
        die;
    }


}