<?php
require_once(APPPATH . 'controllers/AK_Site_Controller.php');
/**
 * @property Users_model $users_model
 */
class Services extends AK_site_Controller
{

    public function index($lang, $serviceId)
    {
        $servicesData = $this->services_model->getDataByLang($serviceId, $lang);
        $galleryData = $this->services_model->getGalleryData($serviceId);
        $this->preloadTranslations([], $lang);
        $this->render(['service' => $servicesData, 'gallery' => $galleryData, 'title' => $this->translations[4] . '-' . $servicesData['title']],$lang);
    }
}

