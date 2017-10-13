<?php
require_once(APPPATH . 'controllers/AK_Site_Controller.php');
/**
 * @property Users_model $users_model
 */
class Contacts extends AK_site_Controller
{

    public function index($lang = false)
    {
        $this->preloadTranslations([22, 23, 27], $lang);
        $this->form_validation->set_rules('subject', 'Subject', 'required|xss_clean');
        $this->form_validation->set_rules('name', 'Name', 'required|xss_clean');
        $this->form_validation->set_rules('phone', 'Phone', 'required|xss_clean');
        $this->form_validation->set_rules('email', 'Email', 'required|xss_clean|valid_email');
        $this->form_validation->set_rules('message', 'Message', 'required|xss_clean');


        if (!$this->form_validation->run()) {
            $res = $this->generate_captcha();
            $data = [
                'additional_js_files' => [
                    'pages/contacts/index'
                ],
                'title' => $this->translations[7],
                'captcha' =>  $res['captcha']
            ];
            if (!$lang) {
                redirect(base_url() . $this->defaultLanguage);
            }
            $this->preloadTranslations([], $lang);
            $this->render($data, $lang);
        } else {
            if (strcmp(strtoupper($this->session->userdata('captchaWord')), strtoupper($_POST['contact_us_captcha'])) == 0){
                $this->load->library('email');

                $this->email->from('server@agat-777.com', $this->input->post('name'));
                $this->email->to('info@agat-777.com');

                $this->email->subject($this->input->post('subject'));
                $this->email->message(
                    'Message: ' . $this->input->post('name') . PHP_EOL .
                    'Phone: ' . $this->input->post('name') . PHP_EOL .
                    'Email: ' . $this->input->post('email') . PHP_EOL
                );

                if ($this->email->send()) {
                    $this->session->set_flashdata('msg', ['status' => 'success', 'msg' => $this->translations[22]]);
                } else {
                    $this->session->set_flashdata('msg', ['status' => 'error', 'msg' => $this->translations[23]]);
                }
            } else {
                $this->session->set_flashdata('msg', ['status' => 'error', 'msg' => $this->translations[27]]);
            }


            redirect(base_url() . $lang . '/' . SLUG_CONTACTS );


        }
    }
    public function generate_captcha(){
        $captchaConfig = array(
            'img_path' => CAPTCHA_IMG_PATH,
            'img_url' => base_url() . CAPTCHA_IMG_PATH,
            'expiration' => 300,
            'font_path' => CAPTCHA_FONT_PATH
        );
        $captcha = create_captcha($captchaConfig);
        $this->session->set_userdata('captchaWord', $captcha['word']);

            $result = array(
                'status' => 'success',
                'msg'    => 'OK',
                'captcha' =>  $captcha,
                'image'  => site_url(CAPTCHA_IMG_PATH . $captcha['filename'])
            );
            return $result;

    }
    public function change_captcha(){
        if ($_POST['changeCaptcha']){
            $res = $this->generate_captcha();
            echo json_encode(['status' => 'success', 'msg' => MSG_CHANGE_CAPTCHA, 'image' => $res['image']]);
            die;
        }
    }
}

