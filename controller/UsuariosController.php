<?php

/**
 * 
 */
class UsuariosController extends ControladorBase
{
   
    /**
     * 
     */
    public function __construct()
    {
        parent::__construct();
        $this->conectar = new Conectar();
        $this->adapter = $this->conectar->conexion();
    }

    /**
     * 
     */
    public function index()
    {
        $usuario = new Usuarios();

        $findAllUsers = $usuario->findAll();

        $this->view('index', array(
            'findAllUsers' => $findAllUsers,
            'hola' => 'aca probando mi nuevo desarrollo'
        ));
    }

    /**
     * 
     */
    public function create()
    {
        if ( isset($_POST['nombre']) ) {
            $usuario = new Usuarios();

            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $email = $_POST['email'];
            $password = sha1($_POST['password']);
            
            $usuario->setNombre[$nombre];
            $usuario->setApellido[$apellido];
            $usuario->setEmail[$email];
            $usuario->setPassword[$password];

            $save = $usuario->save();
        }

        $this->redirect('Usuarios', 'index');
    }

    /**
     * 
     */
    public function delete($id = null)
    {
       if ( isset($_GET['id']) ) {
           $idUser = (int)$_GET['id'];

           $usuario = new Usuarios();
           $usuario->deleteById($idUser);
       }

       $this->redirect();
    }
}
