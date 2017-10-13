<?php
require_once(APPPATH . 'models/Agat_model.php');

class Youtube_model extends Agat_model
{
    protected $table = TBL_YOUTUBE;

    /**
     * @param string $url
     */
    public function save($url)
    {
        $this->db->trans_start();
        $this->db
            ->set([
                'url' => $url
            ])
            ->where('id', 1)
            ->update($this->getTable());
        $this->db->trans_complete();
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->db
            ->select($this->getTable() . '.url')
            ->from($this->getTable())
            ->where($this->getTable() . '.id', 1)
            ->get()
            ->row_array();
    }

}