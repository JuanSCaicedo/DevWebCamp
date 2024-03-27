<?php

namespace Model;

class Ponente extends ActiveRecord {

    protected static $tabla = 'ponentes';
    protected static $columnasDB = ['id', 'nombre', 'apellido', 'ciudad', 'pais', 'imagen', 'tags', 
    'redes'];

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->ciudad = $args['ciudad'] ?? '';
        $this->pais = $args['pais'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
        $this->tags = $args['tags'] ?? '';
        $this->redes = $args['redes'] ?? '';
    }

    public function validar() {
        // $redesV = json_decode($this->redes);
        
        if(!$this->nombre) {
            self::$alertas['error'][] = 'El Nombre es Obligatorio';
        }
        if(!$this->apellido) {
            self::$alertas['error'][] = 'El Apellido es Obligatorio';
        }
        if(!$this->ciudad) {
            self::$alertas['error'][] = 'El Campo Ciudad es Obligatorio';
        }
        if(!$this->pais) {
            self::$alertas['error'][] = 'El Campo País es Obligatorio';
        }
        if(!$this->imagen) {
            self::$alertas['error'][] = 'La imagen es obligatoria';
        }
        if(!$this->tags) {
            self::$alertas['error'][] = 'El Campo áreas es obligatorio';
        }
        // if(!$redesV->facebook) {
        //     self::$alertas['error'][] = 'El Campo Facebook es obligatorio';
        // }
        // if(!$redesV->twitter) {
        //     self::$alertas['error'][] = 'El Campo Twitter es obligatorio';
        // }
        // if(!$redesV->youtube) {
        //     self::$alertas['error'][] = 'El Campo Youtube es obligatorio';
        // }
        // if(!$redesV->instagram) {
        //     self::$alertas['error'][] = 'El Campo Instagram es obligatorio';
        // }
        // if(!$redesV->tiktok) {
        //     self::$alertas['error'][] = 'El Campo Tiktok es obligatorio';
        // }
        // if(!$redesV->github) {
        //     self::$alertas['error'][] = 'El Campo Github es obligatorio';
        // }
    
        return self::$alertas;
    }
}