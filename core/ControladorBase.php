<?php

/**
 * 
 */
class ControladorBase
{
    /**
     * 
     */
    public function __construct()
    {
        require_once 'Conectar.php';
        require_once 'EntidadBase.php';
        require_once 'ModeloBase.php';

        foreach (glob('model/*.php') as $file) {
            require_once $file;
        }
    }

    /**
     * 
     */
    public function view($vista = null, $datos = null)
    {
        foreach ($datos as $id_assoc => $valor) {
            $$id_assoc = $valor;
        }

        require_once 'core/AyudaVistas.php';
        $helper = new AyudaVistas();

        require_once 'views' . $vista . 'View.php';
    }

    /**
     * 
     */
    public function redirect($controller = DEFAULT_CONTROLLER, $action = DEFAULT_ACTION)
    {
        header("Location:index.php?controller=" . $controller . "&action=" . $action);
    }
}
