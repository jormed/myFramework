<?php

function cargarControlador($controller = null)
{
    $controlador = ucwords($controller) . 'Controller';
    $strFileController = 'controller/' . $controlador . '.php';

    if ( !is_file($strFileController) ) {
        $strFileController = 'controller/' . ucwords(DEFAULT_CONTROLLER) . 'Controller.php';
    }

    require_once $strFileController;
    $controllerObj = new $controlador();

    return $controllerObj;
}

function cargarAccion($controllerObj = null, $action = null)
{
    $accion = $action;
    $controllerObj->$accion();
}

function lanzarAccion($controllerObj = null)
{
    if ( isset($_GET['action']) && method_exists($controllerObj, $_GET['action']) ) {
        cargarAccion($controllerObj, $_GET['action']);
    } else {
        cargarAccion($controllerObj, DEFAULT_ACTION);
    }
}