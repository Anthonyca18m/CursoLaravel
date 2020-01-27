<?php

namespace sysVentas;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categoria';
    protected $primaryKey = 'idCategoria';

    public $timestamps = false;
    
    /* 
    $fillable te permite especificar qué campos sí quieres que se guarden en la base de datos. 
    Es decir, se asignan únicamente los especificados en este array.
    */
    protected $fillable = [
        'nombre',
        'descripcion',
        'estado',
        'fechaRegistro'
    ];

    /*
    $guarded permite especificar qué campos no queremos que se asignen al modelo. 
    Es decir, se asignan todos excepto los especificados en este array.
    */
    protected $guarded = [
    ];
}
