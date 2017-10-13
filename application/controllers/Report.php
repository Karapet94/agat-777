<?php
require_once(APPPATH . 'controllers/AK_Site_Controller.php');

class Report extends AK_site_Controller
{

    public function index($lang)
    {
        $this->load->model('report_model');
        $report = $this->report_model->getReportData();
        $this->preloadTranslations([], $lang);
        $this->render(['report' => $report, 'title' => $this->translations[6]],$lang);
    }
}

