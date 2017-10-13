<?php

class Agat_model extends CI_Model
{
    protected $table = null;
    protected $translationsTable = null;

    /**
     * @return null|string
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * @return null|string
     */
    public function getTranslationsTable()
    {
        return $this->translationsTable;
    }



}