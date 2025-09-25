<?php
namespace app\controllers;

use app\models\Contacto;

class HomeController {

    public function index() {
        include "app/views/home.php";
    }

    public function perfil() {
        include "app/views/perfil.php";
    }

    public function lenguaje() {
        include "app/views/lenguaje.php";
    }

    public function contacto() {
        include "app/views/contacto.php";
    }

    public function enviar() {
        $telefono = $_POST['telefono'] ?? '';
        $contacto = new Contacto($telefono);
        $valido = $contacto->validarTelefono();

        include "app/views/contacto.php";
    }
}

?>