<?php

namespace Controllers;
use Model\Regalo;
use Model\Registro;

class APIRegalos
{
    public static function index()
    {
        // Verificar autenticación
        if(!is_admin()) {
            header('Location: /login');
        }

        $regalos = Regalo::all();

        foreach($regalos as $regalo) {
            $regalo->total = Registro::totalArray(['regalo_id' => $regalo->id, 'paquete_id' => "1"]);
        }

        echo json_encode($regalos);

        return;
    }
}