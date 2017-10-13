<?php
require_once(APPPATH . 'controllers/AK_Admin_Controller.php');

class Admin_languages extends AK_Admin_Controller
{
    public function index()
    {
        $languages = $this->languages_model->getLanguages();

        $data = [
            'additional_js_files' => [
                'pages/admin_languages/index'
            ],
            'additional_css_files' => [
                'pages/admin_languages/index'
            ],
            'languages' => $languages,
            'breadcrumbs' => [
                'Languages'
            ]

        ];
        $this->render($data);
    }

    public function save()
    {
        $this->languages_model->save($_POST['id'],$_POST['origin-name'],$_POST['is-default'],$_POST['is-hidden'],$_POST['is-admin']);
        echo json_encode(['status' => 'success', 'msg' => MSG_SUCCESS_SAVE]);
        die;
    }
    public function save_active_languages()
    {
        ini_set('max_execution_time', 0);
        $this->languages_model->saveActive($_POST['languages']);
        echo json_encode(['status' => 'success', 'msg' => MSG_SUCCESS_SAVE]);

        die;
    }
}
