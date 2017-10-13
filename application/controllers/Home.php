<?php
require_once(APPPATH . 'controllers/AK_Site_Controller.php');


class Home extends AK_site_Controller
{

    public function index($lang = false)
    {
        if (!$lang) {
            redirect(base_url() . $this->defaultLanguage);
        }

        $this->load->model('portfolio_model');
        $this->preloadTranslations([26], $lang);
        $data = [
            'last_works' => $this->portfolio_model->getLastWorks($lang),
            'title' => $this->translations[1]
        ];

        $this->render($data, $lang);
    }
}

