<?php

namespace Model;

class Usuario extends ActiveRecord {
    protected static $tabla = 'usuarios';
    protected static $columnasDB = ['id', 'nombre', 'apellido', 'email', 'password', 'confirmado', 'token',
        'admin', 'fecha_registro', 'hora_registro'];

    public $id;
    public $nombre;
    public $apellido;
    public $email;
    public $password;
    public $password2;
    public $confirmado;
    public $token;
    public $admin;
    public $fecha_registro;
    public $hora_registro;

    public $password_actual;
    public $password_nuevo;


    public function __construct($args = []) {
        date_default_timezone_set('America/Bogota');
        $fecha_actual = date('Y-m-d'); // Obtiene la fecha actual en el formato 'YYYY-MM-DD'
        $hora_actual = date('H:i:s'); // Obtiene la hora actual en el formato 'HH:MM:SS'

        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->password = $args['password'] ?? '';
        $this->password2 = $args['password2'] ?? '';
        $this->confirmado = $args['confirmado'] ?? 0;
        $this->token = $args['token'] ?? '';
        $this->admin = $args['admin'] ?? 0;
        $this->fecha_registro = $args['fecha_registro'] ?? $fecha_actual;
        $this->hora_registro = $args['hora_registro'] ?? $hora_actual;
    }

    // Validar el Login de Usuarios
    public function validarLogin() {

        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL) || !$this->email) {
            self::$alertas['error'][] = 'Email no válido';
        }
        if(!$this->password) {
            self::$alertas['error'][] = 'El Password no puede ir vacio';
        }
        return self::$alertas;

    }

    // Validación para cuentas nuevas
    public function validar_cuenta() {
        // Llamada a la función validarCaptcha
        $this->validarCaptcha();
        if(!$this->nombre) {
            self::$alertas['error'][] = 'El Nombre es Obligatorio';
        }
        if(!$this->apellido) {
            self::$alertas['error'][] = 'El Apellido es Obligatorio';
        }
        if(!$this->email) {
            self::$alertas['error'][] = 'El Email es Obligatorio';
        }
        if(!$this->password) {
            self::$alertas['error'][] = 'El Password no puede ir vacio';
        }
        if(strlen($this->password) < 6) {
            self::$alertas['error'][] = 'El password debe contener al menos 6 caracteres';
        }
        if($this->password !== $this->password2) {
            self::$alertas['error'][] = 'Los password son diferentes';
        }
        return self::$alertas;
    }

    // Valida un email
    public function validarEmail() {
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL) || !$this->email) {
            self::$alertas['error'][] = 'Email no válido';
        }
        return self::$alertas;
    }

    // Valida el Password 
    public function validarPassword() {
        if(!$this->password) {
            self::$alertas['error'][] = 'El Password no puede ir vacio';
        }
        if(strlen($this->password) < 6) {
            self::$alertas['error'][] = 'El password debe contener al menos 6 caracteres';
        }
        return self::$alertas;
    }

    public function nuevo_password(): array {
        if(!$this->password_actual) {
            self::$alertas['error'][] = 'El Password Actual no puede ir vacio';
        }
        if(!$this->password_nuevo) {
            self::$alertas['error'][] = 'El Password Nuevo no puede ir vacio';
        }
        if(strlen($this->password_nuevo) < 6) {
            self::$alertas['error'][] = 'El Password debe contener al menos 6 caracteres';
        }
        return self::$alertas;
    }

    // Comprobar el password
    public function comprobar_password(): bool {
        return password_verify($this->password_actual, $this->password);
    }

    // Hashea el password
    public function hashPassword(): void {
        $this->password = password_hash($this->password, PASSWORD_BCRYPT);
    }

    // Generar un Token
    public function crearToken(): void {
        $this->token = uniqid();
    }

    public function validarCaptcha() {
        $ip = $_SERVER['REMOTE_ADDR'];

        $captcha = $_POST['g-recaptcha-response'];
        $secretkey = "6Lcn-iApAAAAAEQbiPvvKwx6zWFtFVHTXdjBlot-";

        $respuesta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$captcha&remoteip=$ip");
        $atributos = json_decode($respuesta, true);

        if(!$atributos['success']) {
            self::$alertas['error'][] = 'Validar Captcha';
        }
    }
}