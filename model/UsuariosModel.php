<?php

/**
 * 
 */
class UsuariosModel extends ModeloBase
{
    
    private $table;

    public function __construct($adapter)
    {
        $this->table = 'usuarios';
        parent::__construct($this->table, $adapter);
    }

    /**
     * 
     */
    public function getUsuario()
    {
        $query = "SELECT * FROM $this->table WHERE email = 'j@j.com'";
        $usuario = $this->ejecutarSql($query);

        return $usuario;
    }
}
