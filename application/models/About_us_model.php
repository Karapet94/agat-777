<?php
require_once(APPPATH . 'models/Agat_model.php');

class About_us_model extends Agat_model
{
    protected $table = TBL_ABOUT_US;
    protected $translationsTable = TBL_ABOUT_US_TRANSLATIONS;

    /**
     * @return array
     */
    public function getAboutUsData()
    {
        return $this->db
            ->select($this->getTable() . '.content, ' . $this->getTable() . '.iso_code')
            ->from($this->getTable())
            ->get()
            ->result_array();
    }

    /**
     * @param array|null $content
     */
    public function save($content = null)
    {

        $this->db->trans_start();
        foreach ($content as $isoCode => $translation) {
            $this->db->set([
                'content' => $translation,
            ]);
            $this->db->where('iso_code', $isoCode);
            $this->db->update(TBL_ABOUT_US_TRANSLATIONS);
        }
        $this->db->trans_complete();

    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->db
            ->select($this->getTranslationsTable() . '.iso_code, ' . $this->getTranslationsTable() . '.content')
            ->from($this->getTable())
            ->join($this->getTranslationsTable(), $this->getTable() . '.id = ' . $this->getTranslationsTable() . '.parent_id')
            ->get()
            ->result_array();
    }

    /**
     * @param string $lang
     * @return array
     */
    public function aboutUsContent($lang)
    {
        $dbResult = $this->db
            ->where('iso_code', $lang)
            ->get($this->getTranslationsTable())
            ->row_array();
        $result = $dbResult['content'];


        return $result;
    }


}