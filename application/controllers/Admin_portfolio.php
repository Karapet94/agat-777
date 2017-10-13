<?php
require_once(APPPATH . 'controllers/AK_Admin_Controller.php');


class Admin_portfolio extends AK_Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('portfolio_model');
    }

    public function index()
    {
        $portfolioData = $this->portfolio_model->getPortfolioData();
        $data = [
            'additional_js_files' => [
                'pages/admin_portfolio/index'
            ],
            'additional_css_files' => [
                'pages/admin_portfolio/index'
            ],
            'breadcrumbs' => [
                'Portfolio',
            ],
            'portfolioData' => $portfolioData
        ];

        $this->render($data);
    }

    public function edit($id = 0)
    {

        if ($id) {
            $portfolioData = $this->portfolio_model->getData($id);
            $convenientData = $this->makeConvenientArray($portfolioData, ['file']);
        } else {
            $convenientData = null;
        }

        $pageTitle = $id ? 'Edit' : 'Add';
        $data = [
            'additional_js_files' => [
                'pages/admin_portfolio/edit'
            ],
            'breadcrumbs' => [
                'admin_portfolio' => 'Portfolio',
                $pageTitle
            ],
            'id' => $id,
            'portfolioData' => $convenientData

        ];

        if (!empty($_POST)) {
            $message = empty($_POST['id']) ? MSG_SUCCESS_CREATE : MSG_SUCCESS_UPDATE;

            if (!empty($_FILES['image']['name'])) {
                $config = [
                    'upload_path' => UPLOADS_PATH_PORTFOLIO_WRITE,
                    'allowed_types' => 'png|jpg|jpeg',
                    'max_size' => 1000,
                    'max_width' => 1600,
                    'max_height' => 800,
                    'encrypt_name' => true
                ];

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('image')) {
                    $this->session->set_flashdata('msg', ['status' => 'error', 'msg' => $this->upload->display_errors()]);
                    redirect('admin_portfolio/edit/' . $id);
                } else {
                    $upload_data = $this->upload->data();
                    $id = $this->portfolio_model->save($id, $upload_data['file_name']);
                    $this->session->set_flashdata('msg', ['status' => 'success', 'msg' => $message]);
                    redirect('admin_portfolio/edit/' . $id);
                }
            } else {
                $id = $this->portfolio_model->save($id);
                $this->session->set_flashdata('msg', ['status' => 'success', 'msg' => $message]);
                redirect('admin_portfolio/edit/' . $id);
            }

        }

        $this->render($data);
    }


    public function delete_from_portfolio()
    {
        $this->portfolio_model->delete($_POST['id']);
        echo json_encode(['status' => 'success']);
        die;
    }
    public function delete_from_gallery()
    {
        $this->portfolio_model->deleteGallery($_POST['id']);
        echo json_encode(['status' => 'success']);
        die;
    }
    public function gallery($id)
    {
        $portfolioName = $this->portfolio_model->getPortfolioName($id);
        $data = [
            'additional_js_files' => [
                'pages/admin_portfolio/gallery'
            ],
            'additional_css_files' => [
                'pages/admin_portfolio/gallery'
            ],
            'breadcrumbs' => [
                'admin_portfolio' => 'Portfolio',
                'admin_portfolio/edit/' . $id => $portfolioName,
                'gallery'
            ]
        ];


        $galleryData = $this->portfolio_model->getGalleryData($id);
        if(!empty($galleryData)){
            $data['galleryData'] = $galleryData;
        }
        if (!empty($_POST)) {
            $message = 'Portfolio image successfully added';

            if (!empty($_FILES['image']['name'])) {
                $config = [
                    'upload_path' => UPLOADS_PATH_PORTFOLIO_GALLERY_WRITE,
                    'allowed_types' => 'png|jpg|jpeg',
                    'max_size' => 1000,
                    'max_width' => 1600,
                    'max_height' => 800,
                    'encrypt_name' => true
                ];

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('image')) {
                    $this->session->set_flashdata('msg', ['status' => 'error', 'msg' => $this->upload->display_errors()]);
                    redirect('admin_portfolio/gallery/' . $id);
                } else {
                    $upload_data = $this->upload->data();
                    $this->portfolio_model->saveGallery($upload_data['file_name'], $id);
                    $this->session->set_flashdata('msg', ['status' => 'success', 'msg' => $message]);
                    redirect('admin_portfolio/gallery/' . $id);
                }
            }

        }

        $this->render($data);

    }
    public function save_portfolio_order()
    {
        $this->portfolio_model->savePortfolioOrder($_POST['portfolioItem']);
        echo json_encode(['status' => 'success']);
        die;
    }
    public function save_gallery_order()
    {
        $this->portfolio_model->saveGalleryOrder($_POST['portfolioItem']);
        echo json_encode(['status' => 'success']);
        die;
    }

}
