<?php
require_once(APPPATH . 'controllers/AK_Admin_Controller.php');


class Admin_translation extends AK_Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('universal_text_model');
    }

    public function index()
    {
        $data = array(
            'additional_js_files' => array(
                'vendor/jquery.dataTables.min',
                'vendor/DT_bootstrap',
                'pages/admin_translation/index'
            ),
            'additional_css_files' => array(
                'vendor/datatables.bootstrap',
            ),
            'breadcrumbs' => [
                'Translations',
            ],
            'aaData' => $this->universal_text_model->getTranslations()
        );
        $this->render($data);
    }
    public function save()
    {
        $this->universal_text_model->save($_POST['id'], $_POST['translations']);
        $this->session->set_flashdata('msg', ['status' => 'success', 'msg' => MSG_SUCCESS_SAVE]);
        echo json_encode(['status' => 'success']);
        die;
    }

}
