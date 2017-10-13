<?php
require_once(APPPATH . 'controllers/AK_Admin_Controller.php');


class Admin_youtube extends AK_Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('youtube_model');
    }

    public function index()
    {
        $youtube = $this->youtube_model->getData();
        $data = [
            'breadcrumbs' => [
                'Youtube video Id',
            ],
            'youtube' => $youtube
        ];
        if (!empty($_POST)) {
            $message = MSG_SUCCESS_UPDATE;
            $this->youtube_model->save($_POST['url']);
            $this->session->set_flashdata('msg', ['status' => 'success', 'msg' => $message]);
            redirect(base_url() . 'admin_youtube');
        }
        $this->render($data);
    }





}
