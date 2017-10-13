<?php
require_once(APPPATH . 'models/Agat_model.php');

class Report_model extends Agat_model
{
    protected $table = TBL_REPORT;

    /**
     * @param string|null $fileName
     */
    public function update($fileName)
    {
        $this->db->trans_start();

        if (!empty($fileName)) {
            $dbResult = $this->db->select('file')->get($this->getTable())->row_array();
            if(!empty($dbResult)){
                $oldFilename = $dbResult['file'];
                unlink(UPLOADS_PATH_REPORT_WRITE . $oldFilename);
                $this->db->set(['file' => $fileName])->where('id', 1)->update($this->getTable());
            }else {
                $this->db->set(['file' => $fileName])->insert($this->getTable());
            }

        }

        $this->db->trans_complete();
    }

    /**
     * @return string
     */
    public function getReportData()
    {
        $result = $this->db
            ->select($this->getTable() . '.file')
            ->from($this->getTable())
            ->get()
            ->row_array();
        return $result['file'];
    }

}