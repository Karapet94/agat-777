<?php
require_once(APPPATH . 'controllers/AK_Admin_Controller.php');


class Admin_slider extends AK_Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('slider_model');
    }

    public function index()
    {
        $sliderData = $this->slider_model->getSliderData();
        $data = [
            'additional_js_files' => [
                'pages/admin_slider/index'
            ],
            'additional_css_files' => [
                'pages/admin_slider/index'
            ],
            'breadcrumbs' => [
                'Slider',
            ],
            'sliderData' => $sliderData
        ];

        $this->render($data);
    }

    public function edit($id = 0)
    {

        if ($id) {
            $sliderData = $this->slider_model->getData($id);
            $convenientData = $this->makeConvenientArray($sliderData, ['file']);
        } else {
            $convenientData = null;
        }

        $pageTitle = $id ? 'Edit' : 'Add';
        $data = [
            'additional_js_files' => [
                'pages/admin_slider/edit'
            ],
            'breadcrumbs' => [
                'admin_slider' => 'Slider',
                $pageTitle
            ],
            'id' => $id,
            'sliderData' => $convenientData

        ];

        if (!empty($_POST)) {
            $message = empty($_POST['id']) ? MSG_SUCCESS_CREATE : MSG_SUCCESS_UPDATE;

            if (!empty($_FILES['image']['name'])) {
                $config = [
                    'upload_path' => UPLOADS_PATH_SLIDER_WRITE,
                    'allowed_types' => 'png|jpg|jpeg',
                    'max_size' => 1000,
                    'max_width' => 1600,
                    'max_height' => 800,
                    'encrypt_name' => true
                ];

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('image')) {
                    $this->session->set_flashdata('msg', ['status' => 'error', 'msg' => $this->upload->display_errors()]);
                    redirect('admin_slider/edit/' . $id);
                } else {
                    $upload_data = $this->upload->data();
                    $id = $this->slider_model->save($id, $upload_data['file_name']);
                    $this->session->set_flashdata('msg', ['status' => 'success', 'msg' => $message]);
                    redirect('admin_slider/edit/' . $id);
                }
            } else {
                $id = $this->slider_model->save($id);
                $this->session->set_flashdata('msg', ['status' => 'success', 'msg' => $message]);
                redirect('admin_slider/edit/' . $id);
            }

        }

        $this->render($data);
    }

    public function save_slider_order()
    {
        $this->slider_model->saveSliderOrder($_POST['sliderItem']);
        echo json_encode(['status' => 'success']);
        die;
    }

    public function delete_from_slider()
    {
        $this->slider_model->delete($_POST['id']);
        echo json_encode(['status' => 'success']);
        die;
    }
}
