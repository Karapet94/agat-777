<?php
require_once(APPPATH . 'models/Agat_model.php');

class Slider_model extends Agat_model
{
    protected $table = TBL_SLIDER;
    protected $translationsTable = TBL_SLIDER_TRANSLATIONS;

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
     * @param string|null $fileName
     */
    protected function update($id, $fileName)
    {
        $this->db->trans_start();

        if (!empty($fileName)) {
            $dbResult = $this->db->select('file')->get($this->getTable())->row_array();
            $oldFilename = $dbResult['file'];
            unlink(UPLOADS_PATH_SLIDER_WRITE . $oldFilename);
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
        $sliderItemId = $this->db->insert_id();
        foreach ($_POST['title'] as $isoCode => $translation) {
            $this->db->insert(
                $this->getTranslationsTable(),
                [
                    'parent_id' => $sliderItemId,
                    'iso_code' => $isoCode,
                    'title' => $translation
                ]
            );

        }
        $this->db->trans_complete();
        return $sliderItemId;
    }

    /**
     * @param array $sliderItem
     */
    public function saveSliderOrder($sliderItem)
    {
        $this->db->trans_start();

        foreach ($sliderItem as $id => $value) {
            $this->db->set(['order' => $value['order']]);
            $this->db->where('id', $id);
            $this->db->update($this->getTable());

        }
        $this->db->trans_complete();

    }

    /**
     * @param int $id
     * @return array
     */
    public function getData($id)
    {
        return $this->db
            ->select($this->getTable() . '.file, ' . $this->getTranslationsTable() . '.iso_code, ' . $this->getTranslationsTable() . '.title')
            ->from($this->getTable())
            ->join($this->getTranslationsTable(), $this->getTable() . '.id = ' . $this->getTranslationsTable() . '.parent_id')
            ->where($this->getTable() . '.id', $id)
            ->get()
            ->result_array();
    }

    /**
     * @return array
     */
    public function getSliderData()
    {
        return $this->db
            ->select($this->getTable() . '.id, ' . $this->getTable() . '.file, ' . $this->getTable() . '.order')
            ->from($this->getTable())
            ->order_by('order')
            ->get()
            ->result_array();
    }

    /**
     * @param string $lang
     * @return array
     */
    public function getAllSlides($lang){
        return $this->db
            ->select($this->getTable() . '.file, ' . $this->getTranslationsTable() . '.title')
            ->from($this->getTable())
            ->order_by($this->getTable() . '.order')
            ->join($this->getTranslationsTable(), $this->getTable() . '.id = ' . $this->getTranslationsTable() . '.parent_id')
            ->where($this->getTranslationsTable() . '.iso_code', $lang)
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
            unlink(UPLOADS_PATH_SLIDER_WRITE . $oldFilename);
            $this->db->delete($this->getTable(), array('id' => $id));
        }
    }

}