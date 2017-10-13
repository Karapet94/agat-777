<?php
require_once(APPPATH . 'controllers/AK_Admin_Controller.php');


class Admin_partner extends AK_Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('partner_model');
    }

    public function index()
    {
        $partnerData = $this->partner_model->getPartnerData();
        $data = [
            'additional_js_files' => [
                'pages/admin_partner/index'
            ],
            'additional_css_files' => [
                'pages/admin_partner/index'
            ],
            'breadcrumbs' => [
                'Partner',
            ],
            'partnerData' => $partnerData
        ];

        $this->render($data);
    }

    public function edit($id = 0)
    {

        if ($id) {
            $partnerData = $this->partner_model->getData($id);
            $convenientData = $this->makeConvenientArray($partnerData, ['file', 'url', 'is_main']);
        } else {
            $convenientData = null;
        }

        $pageTitle = $id ? 'Edit' : 'Add';
        $data = [
            'additional_js_files' => [
                'pages/admin_partner/edit'
            ],
            'breadcrumbs' => [
                'admin_partner' => 'Partner',
                $pageTitle
            ],
            'id' => $id,
            'partnerData' => $convenientData

        ];

        if (!empty($_POST)) {
            $message = empty($_POST['id']) ? MSG_SUCCESS_CREATE : MSG_SUCCESS_UPDATE;

            if (!empty($_FILES['image']['name'])) {
                $config = [
                    'upload_path' => UPLOADS_PATH_PARTNER_WRITE,
                    'allowed_types' => 'png|jpg|jpeg',
                    'max_size' => 1000,
                    'max_width' => 1600,
                    'max_height' => 800,
                    'encrypt_name' => true
                ];

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('image')) {
                    $this->session->set_flashdata('msg', ['status' => 'error', 'msg' => $this->upload->display_errors()]);
                    redirect('admin_partner/edit/' . $id);
                } else {
                    $upload_data = $this->upload->data();
                    $id = $this->partner_model->save($id, $upload_data['file_name']);
                    $this->session->set_flashdata('msg', ['status' => 'success', 'msg' => $message]);
                    redirect('admin_partner/edit/' . $id);
                }
            } else {
                $id = $this->partner_model->save($id);
                $this->session->set_flashdata('msg', ['status' => 'success', 'msg' => $message]);
                redirect('admin_partner/edit/' . $id);
            }

        }

        $this->render($data);
    }

    public function save_partner_order()
    {
        $this->partner_model->savePartnerOrder($_POST['partnerItem']);
        echo json_encode(['status' => 'success']);
        die;
    }

    public function delete_from_partner()
    {
        $this->partner_model->delete($_POST['id']);
        echo json_encode(['status' => 'success']);
        die;
    }


}
