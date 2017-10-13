<?php
require_once(APPPATH . 'controllers/AK_Admin_Controller.php');


class Admin_services extends AK_Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('services_model');
    }

    public function index()
    {
        $servicesData = $this->services_model->getServicesData();
        $data = [
            'additional_js_files' => [
                'pages/admin_services/index'
            ],
            'additional_css_files' => [
                'pages/admin_services/index'
            ],
            'breadcrumbs' => [
                'Services',
            ],
            'servicesData' => $servicesData
        ];

        $this->render($data);
    }

    public function edit($id)
    {
        $servicesData = $this->services_model->getData($id);
        $convenientData = $this->makeConvenientArray($servicesData, ['file']);

        $pageTitle = 'Edit';
        $data = [
            'additional_js_files' => [
                'pages/admin_services/edit'
            ],
            'breadcrumbs' => [
                'admin_services' => 'Services',
                $pageTitle
            ],
            'id' => $id,
            'servicesData' => $convenientData

        ];

        if (!empty($_POST)) {
            $message = empty($_POST['id']) ? MSG_SUCCESS_CREATE : MSG_SUCCESS_UPDATE;

            if (!empty($_FILES['image']['name'])) {
                $config = [
                    'upload_path' => UPLOADS_PATH_SERVICES_WRITE,
                    'allowed_types' => 'png|jpg|jpeg',
                    'max_size' => 1000,
                    'max_width' => 1600,
                    'max_height' => 800,
                    'encrypt_name' => true
                ];

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('image')) {
                    $this->session->set_flashdata('msg', ['status' => 'error', 'msg' => $this->upload->display_errors()]);
                    redirect('admin_services/edit/' . $id);
                }  else {
                    $upload_data = $this->upload->data();
                    $this->services_model->save($id, $upload_data['file_name']);
                    $this->session->set_flashdata('msg', ['status' => 'success', 'msg' => $message]);
                    redirect('admin_services/edit/' . $id);
                }
            } else {
                $this->services_model->save($id);
                $this->session->set_flashdata('msg', ['status' => 'success', 'msg' => $message]);
                redirect('admin_services/edit/' . $id);
            }

        }

        $this->render($data);
    }


    public function delete_from_services()
    {
        $this->services_model->delete($_POST['id']);
        echo json_encode(['status' => 'success']);
        die;
    }
    public function delete_from_gallery()
    {
        $this->services_model->deleteGallery($_POST['id']);
        echo json_encode(['status' => 'success']);
        die;
    }
    public function gallery($id)
    {
        $serviceName = $this->services_model->getServiceName($id);
        $data = [
            'additional_js_files' => [
                'pages/admin_services/gallery'
            ],
            'additional_css_files' => [
                'pages/admin_services/gallery'
            ],
            'breadcrumbs' => [
                'admin_services' => 'Services',
                'admin_services/edit/' . $id => $serviceName,
                'gallery'
            ]
        ];


        $galleryData = $this->services_model->getGalleryData($id);
        if(!empty($galleryData)){
            $data['galleryData'] = $galleryData;
        }
        if (!empty($_POST)) {
            $message = MSG_SUCCESS_CREATE;

            if (!empty($_FILES['image']['name'])) {
                $config = [
                    'upload_path' => UPLOADS_PATH_SERVICES_GALLERY_WRITE,
                    'allowed_types' => 'png|jpg|jpeg',
                    'max_size' => 1000,
                    'max_width' => 1600,
                    'max_height' => 800,
                    'encrypt_name' => true
                ];

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('image')) {
                    $this->session->set_flashdata('msg', ['status' => 'error', 'msg' => $this->upload->display_errors()]);
                    redirect('admin_services/gallery/' . $id);
                } else {
                    $upload_data = $this->upload->data();
                    $this->services_model->saveGallery($upload_data['file_name'], $id);
                    $this->session->set_flashdata('msg', ['status' => 'success', 'msg' => $message]);
                    redirect('admin_services/gallery/' . $id);
                }
            }

        }

        $this->render($data);

    }
    public function save_services_order()
    {
        $this->services_model->saveServicesOrder($_POST['servicesItem']);
        echo json_encode(['status' => 'success']);
        die;
    }
    public function save_gallery_order()
    {
        $this->services_model->saveGalleryOrder($_POST['servicesItem']);
        echo json_encode(['status' => 'success']);
        die;
    }

}
