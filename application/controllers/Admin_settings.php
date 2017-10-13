<?php
require_once(APPPATH . 'controllers/AK_Admin_Controller.php');

class Admin_settings extends AK_Admin_Controller
{

    public function change_password()
    {
        $this->form_validation->set_rules('current_password', 'Username', 'required|xss_clean');
        $this->form_validation->set_rules('new_password', 'Password', 'required|xss_clean');
        $this->form_validation->set_rules('repeat_new_password', 'Repeat Password', 'required|xss_clean|matches[new_password]');

        if ($this->form_validation->run()) {
            $this->load->model('users_model');
            if ($this->users_model->checkIfUserExist(ADMIN_USER_NAME, $_POST['current_password'])) {
                $this->users_model->updatePassword(ADMIN_USER_NAME);
                $this->session->set_flashdata('msg', ['status' => 'success', 'msg' => MSG_SUCCESS_UPDATE]);
            } else {
                $this->session->set_flashdata('msg', ['status' => 'error', 'msg' => MSG_WRONG_PASSWORD]);
            }

            redirect('admin_settings/change_password');
        } else {
            if (!empty($_POST)) {
                $this->session->set_flashdata('msg', ['status' => 'error', 'msg' => MSG_ERROR_COMMON_ERROR]);
                redirect('admin_settings/change_password');
            }
        }

        $data = [
            'additional_js_files' => [
                'pages/admin_settings/change_password'
            ],
             'breadcrumbs' => [
                    'Admin Settings',
             ]
        ];
        $this->render($data);

    }
}
