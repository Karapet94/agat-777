<?php
require_once(APPPATH . 'models/Agat_model.php');

class Universal_text_model extends Agat_model
{
    protected $table = TBL_UNIVERSAL_TEXT;
    protected $translationsTable = TBL_UNIVERSAL_TEXT_TRANSLATIONS;

    /**
     * @return array
     */
    public function getTranslations()
    {
        $dbResult = $this->db
            ->select($this->getTranslationsTable() . '.parent_id, ' . $this->getTranslationsTable() . '.content,' . TBL_LANGUAGES . '.name_english,' . $this->getTranslationsTable() . '.iso_code' )
            ->from($this->getTranslationsTable())
            ->join(TBL_LANGUAGES, $this->getTranslationsTable() . '.iso_code = ' . TBL_LANGUAGES . '.iso_code')
            ->get()
            ->result_array();

        $final = [];

        foreach ($dbResult as $result) {
            $final[] = [
                $result['name_english'],
                $result['parent_id'],
                $result['content'],
                '<a href="#" class="btn btn-primary btn-xs edit-translation" data-iso-code="' . $result['iso_code'] . '" data-id="' . $result['parent_id'] . '">Edit</a>'
            ];
        }

        return $final;
    }

    /**
     * @param int $id
     * @param array $translations
     */
    public function save($id, $translations)
    {
        $this->db->trans_start();
        foreach ($translations as $isoCode => $content){
            $this->db
                ->set(['content' => $content])
                ->where('iso_code', $isoCode)
                ->where('parent_id', $id)
                ->update($this->getTranslationsTable());

        }

        $this->db->trans_complete();
    }

    /**
     * @param array $ids
     * @param string $lang
     * @return array
     */
    public function loadTranslations($ids, $lang)
    {
        $dbResult = $this->db
            ->where_in('parent_id', $ids)
            ->where('iso_code', $lang)
            ->get($this->getTranslationsTable())
            ->result_array();
        $result = [];
        foreach ($dbResult as $row) {
            $result[$row['parent_id']] = $row['content'];
        }

        return $result;
    }

}