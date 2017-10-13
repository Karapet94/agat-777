<?php
require_once(APPPATH . 'controllers/AK_Site_Controller.php');

class Portfolio extends AK_site_Controller
{

    public function index($lang, $slug = null)
    {
        $this->load->model('portfolio_model');
        $portfolioData = $this->portfolio_model->getDataByLang($lang);
        $this->preloadTranslations([], $lang);
        $this->render([
            'portfolioData' => $portfolioData,
            'title' => $this->translations[5],
            'slug' => $slug,
            'additional_js_files' => [
                'pages/portfolio/index'
            ],
        ],$lang);
    }
}

