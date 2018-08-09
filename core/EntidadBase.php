<?php

/**
 * 
 */
class EntidadBase
{

    private $table;
    private $db;
    private $conectar;

    /**
     * 
     */
    public function __conctruct($table)
    {

        $this->table = (string)$table;

        $this->conectar = null;
        $this->db = $adapter;
    }
    
    /**
     * 
     */
    public function getConectar()
    {
        return $this->conectar;
    }

    /**
     * 
     */
    public function db()
    {
        return $this->db;
    }

    /**
     * 
     */
    public function findAll()
    {
        $query = $this->db->query("SELECT * FROM $this->tabble ORDER BY 1 DESC");

        while( $row = $query->fetch_object() ){
            $resultSet[] = $row;
        }

        return $resultSet;
    }

    /**
     * 
     */
    public function getElement( $arrId = array() )
    {
        $arrKey = array_keys($arrId);
        $valId  = $arrId[$nameColum];
        $nameColum = $arrKey[0];

        $query = $this->db->query("SELECT * FROM $this->table WHERE $nameColum = $valId");

        if( $row = $query->fetch_object() ){
            $resultSet[] = $row;
        }

        return $resultSet;
    }

    /**
     * 
     */
    public function deleteElement( $arrId = array() )
    {
        $arrKey = array_keys($arrId);
        $valId  = $arrId[$nameColum];
        $nameColum = $arrKey[0];

        $query = $this->db->query("DELETE FROM $this->table WHERE $nameColum = $valId");
    }
}