<?php

/**
 * @property Users_model $users_model
 */
class Admin_login extends CI_Controller
{

	public function index()
	{
        $this->checkIsLoggedIn();

        $this->form_validation->set_rules('username', 'Username', 'required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'required|xss_clean');
        if (!$this->form_validation->run()) {
            $this->load->view('admin_login/index');
        } else {
            $this->load->model('users_model');
            if ($this->users_model->checkIfUserExist($this->input->post('username'), $this->input->post('password'))) {
                $this->session->set_userdata(['isLoggedIn' => true]);
                redirect('/admin');
            } else {
                $this->load->view('admin_login/index', ['loginError' => true]);
            }
        }

	}

    public function logout()
    {
        $this->session->unset_userdata('isLoggedIn');
        redirect('admin_login');

    }

    protected function checkIsLoggedIn()
    {
        if ($this->session->userdata('isLoggedIn')) {
            redirect('admin');
        }
    }

}

