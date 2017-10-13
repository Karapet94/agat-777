<?php

/**
 * @property Languages_model $languages_model
 * @property Users_model $users_model
 * @property Slider_model $slider_model
 * @property Universal_text_model $universal_text_model
 * @property About_us_model $about_us_model
 * @property Partner_model $partner_model
 * @property Portfolio_model $portfolio_model
 * @property Services_model $services_model
 * @property Report_model $report_model
 * @property Meta_model $meta_model
 */
abstract class AK_site_Controller extends CI_Controller
{

    protected $layout = 'main';
    protected $activeLanguages;
    protected $defaultLanguage;
    protected $translations = [];

    public function __construct()
    {
        parent::__construct();
        $this->load->model('universal_text_model');
        $this->load->model('services_model');
        $this->load->model('partner_model');
        $this->load->model('slider_model');
        $this->load->model('meta_model');
        $this->activeLanguages = $this->languages_model->getActiveLanguages();
        $this->setDefaultLanguage();
    }

    protected function setDefaultLanguage()
    {
        foreach ($this->activeLanguages as $activeLanguage){
            if($activeLanguage['is_default'] == 1){
                $this->defaultLanguage = $activeLanguage['iso_code'];
                break;
            }
        }
    }

    protected function preloadTranslations($ids, $lang)
    {
        $ids = array_merge($ids, range(1, 26));
        $this->translations = $this->universal_text_model->loadTranslations($ids, $lang);
    }

    protected function render($data = [], $lang)
    {
        $controllerName = $this->router->fetch_class();
        $actionName = $this->router->fetch_method();
        $data['activeLanguages'] = $this->activeLanguages;
        $data['translations'] = $this->translations;
        $data['metas'] = $this->meta_model->getDataByLang($lang);
        $data['lang'] = $lang;
        $title = $this->translations[8];
        if (isset($data['title'])) {
            $title .= ' - ' . $data['title'];
        }
        $data['title'] = $title;
        $services = $this->services_model->getServices($lang);
        $pageContent = $this->load->view('pages/site/' . strtolower($controllerName) . '/' . strtolower($actionName), $data, true);
        $mainPartnerData = $this->partner_model->getFooterData();
        $additionalJsFiles = (array_key_exists('additional_js_files', $data)) ? $data['additional_js_files'] : [];
        $additionalCssFiles = (array_key_exists('additional_css_files', $data)) ? $data['additional_css_files'] : [];
        $flMsg = $this->session->flashdata('msg');
        $flashMessage = !empty($flMsg) ? $flMsg : [];
        $this->load->view('layouts/site/' . $this->layout . '.php', [
            'pageContent' => $pageContent,
            'additionalJsFiles' => $additionalJsFiles,
            'additionalCssFiles' => $additionalCssFiles,
            'flashMessage' => json_encode($flashMessage),
            'services' => $services,
            'mainPartnerData' => $mainPartnerData,
            'slides' => $this->slider_model->getAllSlides($lang)
        ]);
    }
}
