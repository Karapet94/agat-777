<?php
require_once(APPPATH . 'controllers/AK_Site_Controller.php');

class Partner extends AK_site_Controller
{

    public function index($lang)
    {
        $this->load->model('partner_model');
        $partnerData = $this->partner_model->getDataByLang($lang);
        $this->preloadTranslations([], $lang);
        $this->render(['partnerData' => $partnerData, 'title' => $this->translations[3]],$lang);
    }
}

