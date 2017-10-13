<?php
require_once(APPPATH . 'models/Agat_model.php');

class Portfolio_model extends Agat_model
{
    protected $table = TBL_PORTFOLIO;
    protected $translationsTable = TBL_PORTFOLIO_TRANSLATIONS;

    public static function getLastWorkIds()
    {
        return [
           ID_PORTFOLIO_ARARAT_MEDICAL_CENTER,
           ID_PORTFOLIO_HERATSU_MEDICAL_CENTER,
           ID_PORTFOLIO_INVESTIGATE_COMMITTEE,
        ];
    }


    /**
     * @param int $id
     * @param stringnull $fileName
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
            unlink(UPLOADS_PATH_PORTFOLIO_WRITE . $oldFilename);
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
        $portfolioItemId = $this->db->insert_id();
        foreach ($_POST['title'] as $isoCode => $translation) {
            $this->db->insert(
                $this->getTranslationsTable(),
                [
                    'parent_id' => $portfolioItemId,
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
                ->where('parent_id', $portfolioItemId)
                ->update($this->getTranslationsTable());


        }
        $this->db->trans_complete();
        return $portfolioItemId;
    }

    /**
     * @param int $id
     * @return string
     */
    public function getPortfolioName($id)
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
     * @param string $lang
     * @return array
     */
    public function getLastWorks($lang)
    {
         $result = [];
         $dbResult = $this->db
             ->select($this->getTable() . '.id, ' . $this->getTranslationsTable() . '.title')
             ->from($this->getTable())
             ->where_in($this->getTable() . '.id', self::getLastWorkIds())
             ->where($this->getTranslationsTable() . '.iso_code', $lang)
             ->join($this->getTranslationsTable(), $this->getTable() . '.id = ' . $this->getTranslationsTable() . '.parent_id')
             ->get()
             ->result_array();

         foreach ($dbResult as $res) {
             $result[$res['id']] = $res['title'];
         }

         return $result;
    }

    /**
     * @param array
     */
    public function savePortfolioOrder($portfolioItem)
    {
        $this->db->trans_start();

        foreach ($portfolioItem as $id => $value) {
            $this->db->set(['order' => $value['order']]);
            $this->db->where('id', $id);
            $this->db->update($this->getTable());

        }
        $this->db->trans_complete();

    }

    /**
     * @param array
     */
  public function saveGalleryOrder($portfolioItem)
    {
        $this->db->trans_start();

        foreach ($portfolioItem as $id => $value) {
            $this->db->set(['order' => $value['order']]);
            $this->db->where('id', $id);
            $this->db->update(TBL_PORTFOLIO_GALLERY);

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
            ->select($this->getTable() . '.file, ' . $this->getTranslationsTable() . '.iso_code, ' . $this->getTranslationsTable() . '.title, ' . $this->getTranslationsTable() . '.description')
            ->from($this->getTable())
            ->join($this->getTranslationsTable(), $this->getTable() . '.id = ' . $this->getTranslationsTable() . '.parent_id')
            ->where($this->getTable() . '.id', $id)
            ->get()
            ->result_array();
    }

    /**
     * @return array
     */
    public function getPortfolioData()
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
            ->select(TBL_PORTFOLIO_GALLERY . '.id, ' . TBL_PORTFOLIO_GALLERY . '.image')
            ->from(TBL_PORTFOLIO_GALLERY)
            ->where(TBL_PORTFOLIO_GALLERY . '.parent_id', $id)
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
            unlink(UPLOADS_PATH_PORTFOLIO_WRITE . $oldFilename);
            $this->db->delete($this->getTable(), array('id' => $id));
        }
    }

    /**
     * @param int $id
     */
    public function deleteGallery($id = 0)
    {
        if ($id) {
            $dbResult = $this->db->select('image')->where('id', $id)->get(TBL_PORTFOLIO_GALLERY)->row_array();
            $oldFilename = $dbResult['image'];
            unlink(UPLOADS_PATH_PORTFOLIO_GALLERY_WRITE . $oldFilename);
            $this->db->delete(TBL_PORTFOLIO_GALLERY, array('id' => $id));
        }
    }

    /**
     * @param string $fileName
     * @param int $id
     */
    public function saveGallery($fileName, $id)
    {
        $this->db->trans_start();
        $this->db->insert(TBL_PORTFOLIO_GALLERY, ['image' => $fileName, 'parent_id' => $id]);
        $this->db->trans_complete();
    }

    /**
     * @param string $lang
     * @return array
     */
    public function getDataByLang($lang)
    {
        $result = $this->db
            ->select($this->getTable() . '.id, ' . $this->getTable() . '.file, ' . $this->getTranslationsTable() . '.title, ' . $this->getTranslationsTable() . '.description')
            ->from($this->getTable())
            ->where('iso_code', $lang)
            ->join($this->getTranslationsTable(), $this->getTable() . '.id = ' . $this->getTranslationsTable() . '.parent_id')
            ->order_by( $this->getTable() . '.order')
            ->get()
            ->result_array();

        foreach ($result as &$res){
            $res['image'] = $this->db
                ->select(TBL_PORTFOLIO_GALLERY . '.image')
                ->from(TBL_PORTFOLIO_GALLERY)
                ->where(TBL_PORTFOLIO_GALLERY . '.parent_id', $res['id'])
                ->get()
                ->result_array();

        }
        return $result;
    }

}