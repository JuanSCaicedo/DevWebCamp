<?php

function debuguear($variable): string
{
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}
function s($html): string
{
    $s = htmlspecialchars($html);
    return $s;
}

function pagina_actual($path): bool
{
    return str_contains($_SERVER['PATH_INFO'] ?? '/', $path) ? true : false;
}

function is_auth(): bool
{
    // Solo inicia una nueva sesión si no hay una activa
    if (!isset($_SESSION)) {
        session_start();
    }
    return isset($_SESSION['nombre']) && !empty($_SESSION);
}

function is_admin(): bool
{
    // Solo inicia una nueva sesión si no hay una activa
    if (!isset($_SESSION)) {
        session_start();
    }
    return isset($_SESSION['admin']) && !empty($_SESSION['admin']);
}

function aos_animacion() : void
{
    $efectos = ['fade-up', 'fade-down', 'flip-left', 'flip-right', 'fade-down', 'flip-left', 'flip-right',  
    'zoom-in', 'zoom-in-up', 'zoom-in-down', 'zoom-in-right', 'fade-right', 'fade-up-right', 'fade-down-right',
    'zoom-out-right'];

    $efecto = array_rand($efectos, 1);

    echo ' data-aos="' . ($efectos[$efecto]) . '" ';
}


