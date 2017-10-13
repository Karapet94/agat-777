<?php

/**
 * @property Languages_model $languages_model
 * @property Users_model $users_model
 * @property Slider_model $slider_model
 * @property Universal_text_model $universal_text_model
 * @property About_us_model $about_us_model
 * @property Partner_model $partner_model
 * @property Meta_model $meta_model
 * @property Portfolio_model $portfolio_model
 * @property Services_model $services_model
 * @property Report_model $report_model
 * @property Youtube_model $youtube_model
 */
abstract class AK_Admin_Controller extends CI_Controller
{

    protected $layout = 'main';
    protected $activeLanguages;

    public function __construct()
    {
        parent::__construct();
        $this->activeLanguages = $this->languages_model->getActiveLanguages();
        $this->checkIsLoggedIn();
    }

    protected function render($data = [])
    {
        $controllerName = $this->router->fetch_class();
        $actionName = $this->router->fetch_method();
        $data['activeLanguages'] = $this->activeLanguages;
        $pageContent = $this->load->view('pages/admin/' . strtolower($controllerName) . '/' . strtolower($actionName), $data, true);
        $additionalJsFiles = (array_key_exists('additional_js_files', $data)) ? $data['additional_js_files'] : [];
        $additionalCssFiles = (array_key_exists('additional_css_files', $data)) ? $data['additional_css_files'] : [];
        $flMsg = $this->session->flashdata('msg');
        $flashMessage = !empty($flMsg) ? $flMsg : [];
        $this->load->view('layouts/admin/' . $this->layout . '.php', [
            'pageContent' => $pageContent,
            'additionalJsFiles' => $additionalJsFiles,
            'additionalCssFiles' => $additionalCssFiles,
            'flashMessage' => json_encode($flashMessage)
        ]);
    }

    protected function checkIsLoggedIn()
    {
        if (!$this->session->userdata('isLoggedIn')) {
            redirect('admin_login');
        }
    }

    protected function makeConvenientArray($originalData, $notTranslatingFields)
    {
        $result = ['translations' => []];
        foreach ($originalData as $data) {
            foreach ($data as $key => $value) {
                $isoCode = $data['iso_code'];
                if (!array_key_exists($isoCode, $result['translations'])) {
                    $result['translations'][$isoCode] = [];
                }
                if ($key == 'iso_code') {
                    continue;
                }
                if (in_array($key, $notTranslatingFields)) {
                    if (!array_key_exists($key, $result)) {
                        $result[$key] = $value;
                    }
                    continue;
                }

                $result['translations'][$isoCode][$key] = $value;

            }
        }

        return $result;
    }

}
