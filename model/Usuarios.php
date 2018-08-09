<?php

/**
 * 
 */
class Usuarios extends EntidadBase
{
    private $id;
    private $nombre;
    private $apellido;
    private $email;
    private $password;

    /**
     * 
     */
    public function __construct($adapter)
    {
        $table = 'usuarios';
        parent::__construct($table, $adapter);
    }

    /**
     * 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * 
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * 
     */
    public function setId($id = null)
    {
        $this->id = $id;
    }

    /**
     * 
     */
    public function setNombre($nombre = null)
    {
        $this->nombre = $nombre;
    }

    /**
     * 
     */
    public function setApellido($apellido = null)
    {
        $this->apelllido = $apellido;
    }

    /**
     * 
     */
    public function setEmail($email = null)
    {
        $this->email = $email;
    }

    /**
     * 
     */
    public function setPassword($password = null)
    {
        $this->password = $password;
    }

    /**
     * 
     */
    public function save()
    {
       $query = "INSERT INTO usuarios(id, nombre, apellido, email, password) "
                . "VALUES(NULL,"
                . "'" . $this->nombre . "'"
                . "'" . $this->apellido . "'"
                . "'" . $this->email . "'"
                . "'" . $this->password . "'"
                . ")";
        
        $save = $this->db->query($query);
        return $save;
    }
}