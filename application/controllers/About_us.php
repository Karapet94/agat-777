<?php
require_once(APPPATH . 'controllers/AK_Site_Controller.php');

class About_us extends AK_site_Controller
{

    public function index($lang = false)
    {
        if (!$lang) {
            redirect(base_url() . $this->defaultLanguage);
        }
        $this->load->model('about_us_model');
        $this->preloadTranslations([11], $lang);
        $this->render(['about_us' => $this->about_us_model->aboutUsContent($lang), 'title' => $this->translations[2]], $lang);
    }
}

