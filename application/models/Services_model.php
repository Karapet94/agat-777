<?php
require_once(APPPATH . 'models/Agat_model.php');

class Services_model extends Agat_model
{
    protected $table = TBL_SERVICES;
    protected $translationsTable = TBL_SERVICES_TRANSLATIONS;

    /**
     * @param int $id
     * @param string|null $fileName
     */
    public function save($id, $fileName = null)
    {

        $this->db->trans_start();

        if (!empty($fileName)) {
            $dbResult = $this->db->select('file')->where('id', $id)->get($this->getTable())->row_array();
            if(!empty($dbResult['file'])){
                $oldFilename = $dbResult['file'];
                unlink(UPLOADS_PATH_SERVICES_WRITE . $oldFilename);
            }
            $this->db->set(['file' => $fileName])->where('id', $id)->update($this->getTable());
        }

        foreach ($_POST['description'] as $isoCode => $description) {
            $this->db
                ->set([
                    'description' => $description,
                    'title' => $_POST['title'][$isoCode]
                ])
                ->where('iso_code', $isoCode)
                ->where('parent_id', $id)
                ->update($this->getTranslationsTable());
        }


        $this->db->trans_complete();

    }

    /**
     * @param int $id
     * @return string
     */
    public function getServiceName($id)
    {
        $result = $this->db
            ->select($this->getTranslationsTable() . '.title')
            ->from($this->getTranslationsTable())
            ->join(TBL_LANGUAGES, TBL_LANGUAGES . '.iso_code = '  . $this->getTranslationsTable() . '.iso_code')
            ->where(TBL_LANGUAGES . '.is_default', 1)
            ->where($this->getTranslationsTable() . '.parent_id', $id)
            ->get()
            ->row_array();

        return $result['title'];
    }

    /**
     * @param array $servicesItem
     */
    public function saveServicesOrder($servicesItem)
    {
        $this->db->trans_start();

        foreach ($servicesItem as $id => $value) {
            $this->db->set(['order' => $value['order']]);
            $this->db->where('id', $id);
            $this->db->update($this->getTable());

        }
        $this->db->trans_complete();

    }

    /**
     * @param array $servicesItem
     */
    public function saveGalleryOrder($servicesItem)
    {
        $this->db->trans_start();

        foreach ($servicesItem as $id => $value) {
            $this->db->set(['order' => $value['order']]);
            $this->db->where('id', $id);
            $this->db->update(TBL_SERVICES_GALLERY);

        }
        $this->db->trans_complete();

    }

    /**
     * @param string $lang
     * @return array
     */
    public function getServices($lang)
    {
        $dbRes = $this->db
            ->select('parent_id, title')
            ->where('iso_code', $lang)
            ->get($this->getTranslationsTable())
            ->result_array();
        $res = [];
        foreach ($dbRes as $row) {
            $res[$row['parent_id']] = $row['title'];
        }
        return $res;
    }

    /**
     * @param int $id
     * @return array
     */
    public function getData($id)
    {
        return $this->db
            ->select($this->getTable() . '.file, ' . $this->getTranslationsTable() . '.iso_code, ' . $this->getTranslationsTable() . '.title, ' . $this->getTranslationsTable() . '.description')
            ->from($this->getTable())
            ->join($this->getTranslationsTable(), $this->getTable() . '.id = ' . $this->getTranslationsTable() . '.parent_id')
            ->where($this->getTable() . '.id', $id)
            ->get()
            ->result_array();
    }

    /**
     * @param int $id
     * @param string $lang
     * @return array
     */
    public function getDataByLang($id,$lang)
    {
        return $this->db
            ->select($this->getTable() . '.file, ' . $this->getTranslationsTable() . '.title, ' . $this->getTranslationsTable() . '.description')
            ->from($this->getTable())
            ->where('iso_code', $lang)
            ->join($this->getTranslationsTable(), $this->getTable() . '.id = ' . $this->getTranslationsTable() . '.parent_id')
            ->where($this->getTable() . '.id', $id)
            ->get()
            ->row_array();
    }

    /**
     * @return array
     */
    public function getServicesData()
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
     * @return array
     */
    public function getGalleryData($id)
    {
        return $this->db
            ->select(TBL_SERVICES_GALLERY . '.id, ' . TBL_SERVICES_GALLERY . '.image')
            ->from(TBL_SERVICES_GALLERY)
            ->where(TBL_SERVICES_GALLERY . '.parent_id', $id)
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
            unlink(UPLOADS_PATH_SERVICES_WRITE . $oldFilename);
            $this->db->delete($this->getTable(), array('id' => $id));
        }
    }

    /**
     * @param int $id
     */
    public function deleteGallery($id = 0)
    {
        if ($id) {
            $dbResult = $this->db->select('image')->where('id', $id)->get(TBL_SERVICES_GALLERY)->row_array();
            $oldFilename = $dbResult['image'];
            unlink(UPLOADS_PATH_SERVICES_GALLERY_WRITE . $oldFilename);
            $this->db->delete(TBL_SERVICES_GALLERY, array('id' => $id));
        }
    }

    /**
     * @param string $fileName
     * @param int $id
     */
    public function saveGallery($fileName, $id)
    {
        $this->db->trans_start();
        $this->db->insert(TBL_SERVICES_GALLERY, ['image' => $fileName, 'parent_id' => $id]);
        $this->db->trans_complete();
    }

}