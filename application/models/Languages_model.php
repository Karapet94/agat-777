<?php
require_once(APPPATH . 'models/Agat_model.php');

class Languages_model extends Agat_model
{

    protected $table = TBL_LANGUAGES;

    /**
     * @var array
     */
    protected $translatingTables = [
        TBL_SLIDER => TBL_SLIDER_TRANSLATIONS,
        TBL_ABOUT_US => TBL_ABOUT_US_TRANSLATIONS,
        TBL_UNIVERSAL_TEXT => TBL_UNIVERSAL_TEXT_TRANSLATIONS,
        TBL_PORTFOLIO => TBL_PORTFOLIO_TRANSLATIONS,
        TBL_PARTNER => TBL_PARTNER_TRANSLATIONS,
        TBL_SERVICES => TBL_SERVICES_TRANSLATIONS,
        TBL_META => TBL_META_TRANSLATIONS,
    ];

    /**
     * @return array
     */
    public function getLanguages()
    {
        $this->db->from($this->getTable());
        $this->db->order_by('order');
        return $this->db->get()->result_array();
    }

    /**
     * @param int $id
     * @param string $originName
     * @param int $isDefault
     * @param int $isHidden
     * @param int $isAdmin
     */
    public function save($id, $originName, $isDefault, $isHidden, $isAdmin)
    {
        if ($isDefault) {
            $this->db->set(['is_default' => 0]);
            $this->db->where('is_default', 1);
            $this->db->update($this->getTable());
        }
         if ($isAdmin) {
            $this->db->set(['is_admin' => 0]);
            $this->db->where('is_admin', 1);
            $this->db->update($this->getTable());
        }

        $array = array(
            'name_origin' => $originName,
            'is_default' => $isDefault,
            'is_hidden' => $isHidden,
            'is_admin' => $isAdmin

        );

        if ($isDefault == 1) {
            $array['is_active'] = 1;
        }

        $this->db->set($array);
        $this->db->where('id', $id);
        $this->db->update($this->getTable());

    }

    /**
     * @return array
     */
    public function getActiveLanguages()
    {
        return $this->db->where('is_active', 1)->get($this->getTable())->result_array();
    }

    /**
     * @param array $languages
     */
    public function saveActive($languages)
    {
        $this->db->trans_start();

        foreach ($languages as $id => $value) {
            $langInfo = $this->db->where('id', $id)->get($this->getTable())->row_array();
            $isoCode = $langInfo['iso_code'];
            if ($value['active'] == 1) {
                $this->db->set(['is_active' => 1, 'order' => $value['order']]);
                $this->db->where('id', $id);
                $this->db->update($this->getTable());
                $this->addRowsForLanguage($isoCode);
            } else {
                $this->db->set(['is_active' => 0, 'order' => $value['order']]);
                $this->db->where('id', $id);
                $this->db->update($this->getTable());
                $this->deleteDataInLanguage($isoCode);

            }

        }
        $this->db->trans_complete();

    }

    /**
     * @param string $isoCode
     */
    protected function deleteDataInLanguage($isoCode)
    {
        foreach ($this->translatingTables as $mainTable => $translatingTable) {
            $this->db->where('iso_code', $isoCode)->delete($translatingTable);
        }
    }

    /**
     * @param string $isoCode
     */
    protected function addRowsForLanguage($isoCode)
    {

        foreach ($this->translatingTables as $mainTable => $translatingTable) {
            $ids = $this->db->select('id')->get($mainTable)->result_array();
            $translationsData = $this->db->select('parent_id, iso_code')->get($translatingTable)->result_array();
            foreach ($ids as $id) {
                $translationExist = false;
                foreach ($translationsData as $translationData) {
                    if ($translationData['parent_id'] == $id['id'] && $translationData['iso_code'] == $isoCode) {
                        $translationExist = true;
                        break;
                    }
                }

                if (!$translationExist) {
                    $this->db->insert(
                        $translatingTable,
                        [
                            'parent_id' => $id['id'],
                            'iso_code' => $isoCode,
                        ]
                    );
                }
            }
        }
    }
}