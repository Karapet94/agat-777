<?php
require_once(APPPATH . 'models/Agat_model.php');

class Meta_model extends Agat_model
{
    protected $table = TBL_META;
    protected $translationsTable = TBL_META_TRANSLATIONS;

    public function getData($typeId)
    {
        return $this->db
            ->select($this->getTable() . '.type, ' . $this->getTranslationsTable() . '.iso_code, ' . $this->getTranslationsTable() . '.content')
            ->from($this->getTable())
            ->join($this->getTranslationsTable(), $this->getTable() . '.id = ' . $this->getTranslationsTable() . '.parent_id')
            ->where($this->getTable() . '.id', $typeId)
            ->get()
            ->result_array();
    }

    public function save($typeId)
    {
        $this->db->trans_start();
        foreach ($_POST['content'] as $isoCode => $translation) {
            $this->db
                ->set(['content' => $translation])
                ->where('parent_id', $typeId)
                ->where('iso_code', $isoCode)
                ->update($this->getTranslationsTable());

        }
        $this->db->trans_complete();
    }
    public function getDataByLang($lang)
        {
            return $this->db
                ->select($this->getTable() . '.type, ' . $this->getTranslationsTable() . '.content, ' . $this->getTranslationsTable() . '.iso_code')
                ->from($this->getTable())
                ->join($this->getTranslationsTable(), $this->getTable() . '.id = ' . $this->getTranslationsTable() . '.parent_id')
                ->where($this->getTranslationsTable() . '.iso_code', $lang)
                ->get()
                ->result_array();
        }

}