<?php
require_once(APPPATH . 'models/Agat_model.php');

class Partner_model extends Agat_model
{
    protected $table = TBL_PARTNER;
    protected $translationsTable = TBL_PARTNER_TRANSLATIONS;

    /**
     * @param int $id
     * @param string|null $fileName
     * @return int
     */
    public function save($id, $fileName = null)
    {
        if ($id) {
            $this->update($id, $fileName);
            return $id;
        } else {
            return $this->insert($fileName);
        }
    }

    /**
     * @param int $id
     * @param string $fileName
     */
    protected function update($id, $fileName)
    {
        $this->db->trans_start();

        if (!empty($fileName)) {
            $dbResult = $this->db->select('file')->get($this->getTable())->row_array();
            $oldFilename = $dbResult['file'];
            unlink(UPLOADS_PATH_PARTNER_WRITE . $oldFilename);
            $this->db->set(['file' => $fileName])->where('id', $id)->update($this->getTable());
        }


        foreach ($_POST['title'] as $isoCode => $translation) {
            $this->db
                ->set([
                    'title' => $translation
                ])
                ->where('iso_code', $isoCode)
                ->where('parent_id', $id)
                ->update($this->getTranslationsTable());

        }
        foreach ($_POST['description'] as $isoCode => $translation) {
            $this->db
                ->set([
                    'description' => $translation
                ])
                ->where('iso_code', $isoCode)
                ->where('parent_id', $id)
                ->update($this->getTranslationsTable());

        }

        if ($_POST['main_partner']){
            $this->db
                ->set([
                    'is_main' => $_POST['main_partner']
                ])
                ->where('id', $id)
                ->update($this->getTable());
        }
        else{
            $this->db
                ->set([
                    'is_main' => 'off'
                ])
                ->where('id', $id)
                ->update($this->getTable());
        }
        if (!empty($_POST['url'])) {
            $this->db
                ->set([
                    'url' => $_POST['url']
                ])
                ->where('id', $id)
                ->update($this->getTable());
        }


        $this->db->trans_complete();
    }

    /**
     * @param array $partnerItem
     */
    public function savePartnerOrder($partnerItem)
    {
        $this->db->trans_start();

        foreach ($partnerItem as $id => $value) {
            $this->db->set(['order' => $value['order']]);
            $this->db->where('id', $id);
            $this->db->update($this->getTable());

        }
        $this->db->trans_complete();

    }

    /**
     * @param string $fileName
     * @return int
     */
    protected function insert($fileName)
    {
        $this->db->trans_start();
        $this->db->insert($this->getTable(), ['file' => $fileName]);
        $partnerItemId = $this->db->insert_id();
        foreach ($_POST['title'] as $isoCode => $translation) {
            $this->db->insert(
                $this->getTranslationsTable(),
                [
                    'parent_id' => $partnerItemId,
                    'iso_code' => $isoCode,
                    'title' => $translation
                ]
            );

        }
        foreach ($_POST['description'] as $isoCode => $translation) {
            $this->db
                ->set([
                    'description' => $translation
                ])
                ->where('iso_code', $isoCode)
                ->where('parent_id', $partnerItemId)
                ->update($this->getTranslationsTable());


        }

        if ($_POST['main_partner']){
            $this->db
                ->set([
                    'is_main' => $_POST['main_partner']
                ])
                ->where('id', $partnerItemId)
                ->update($this->getTable());
        }
        if (!empty($_POST['url'])) {
            $this->db
                ->set([
                    'url' => $_POST['url']
                ])
                ->where('id', $partnerItemId)
                ->update($this->getTable());
        }
        $this->db->trans_complete();
        return $partnerItemId;
    }


    /**
     * @param int $id
     * @return array
     */
    public function getData($id)
    {
        return $this->db
            ->select($this->getTable() . '.file, ' . $this->getTable() . '.url, ' . $this->getTable() . '.is_main, ' . $this->getTranslationsTable() . '.iso_code, ' . $this->getTranslationsTable() . '.title, ' . $this->getTranslationsTable() . '.description')
            ->from($this->getTable())
            ->join($this->getTranslationsTable(), $this->getTable() . '.id = ' . $this->getTranslationsTable() . '.parent_id')
            ->where($this->getTable() . '.id', $id)
            ->get()
            ->result_array();
    }

    /**
     * @return array
     */
    public function getPartnerData()
    {
        return $this->db
            ->select($this->getTable() . '.id, ' . $this->getTable() . '.file')
            ->from($this->getTable())
            ->order_by('order')
            ->get()
            ->result_array();
    }

    /**
     * @param int $id
     */
    public function delete($id = 0)
    {
        if($id){
            $dbResult = $this->db->select('file')->where('id',$id)->get($this->getTable())->row_array();
            $oldFilename = $dbResult['file'];
            unlink(UPLOADS_PATH_PARTNER_WRITE . $oldFilename);
            $this->db->delete($this->getTable(), array('id' => $id));
        }
    }

    /**
     * @param string $lang
     * @return array
     */
    public function getDataByLang($lang){
        return $this->db
            ->select($this->getTable() . '.file, ' . $this->getTable() . '.url, ' . $this->getTranslationsTable() . '.title, ' . $this->getTranslationsTable() . '.description')
            ->from($this->getTable())
            ->join($this->getTranslationsTable(), $this->getTable() . '.id = ' . $this->getTranslationsTable() . '.parent_id')
            ->where($this->getTranslationsTable() . '.iso_code', $lang)
            ->order_by( $this->getTable() . '.order')
            ->get()
            ->result_array();
    }

    /**
     * @return array
     */
    public function getFooterData(){
        return $this->db
            ->select($this->getTable() . '.file, ' . $this->getTable() . '.is_main, '  . $this->getTable() . '.url, ' . $this->getTranslationsTable() . '.title')
            ->from($this->getTable())
            ->join($this->getTranslationsTable(), $this->getTable() . '.id = ' . $this->getTranslationsTable() . '.parent_id')
            ->where($this->getTranslationsTable() . '.iso_code', 'en')
            ->order_by( $this->getTable() . '.order')
            ->where('is_main', 'on')
            ->get()
            ->result_array();
    }


}