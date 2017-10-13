<?php
require_once(APPPATH . 'controllers/AK_Admin_Controller.php');


class Admin_report extends AK_Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('report_model');
    }

    public function edit()
    {
        $reportData = $this->report_model->getReportData();
        $data = [
            'additional_js_files' => [
                'pages/admin_report/edit'
            ],
            'breadcrumbs' => [
                'admin_report/edit' => 'Report',
            ],
            'reportData' => $reportData,
        ];



        if (!empty($_POST)) {

            $message = MSG_SUCCESS_UPDATE;
            if (!empty($_FILES['pdf']['name'])) {
                $config = [
                    'upload_path' => UPLOADS_PATH_REPORT_WRITE,
                    'allowed_types' => 'pdf',
                ];

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('pdf')) {
                    $this->session->set_flashdata('msg', ['status' => 'error', 'msg' => $this->upload->display_errors()]);
                    redirect('admin_report/edit/');
                } else {
                    $upload_data = $this->upload->data('file_name');
                    $this->report_model->update($upload_data);
                    $this->session->set_flashdata('msg', ['status' => 'success', 'msg' => $message]);
                    redirect('admin_report/edit/');
                }
            }
        }

        $this->render($data);
    }


}
