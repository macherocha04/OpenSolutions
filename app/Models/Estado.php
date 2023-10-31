<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;
    protected $table = 'estados'; // Nombre de la tabla en la base de datos

    protected $primaryKey = 'ID_estado'; // Nombre de la clave primaria

    /**
     * Los atributos que son asignables.
     *
     * @var array
     */
    protected $fillable = [
        'Nombre',
        // Puedes agregar más campos aquí si es necesario
    ];

    // Si no deseas utilizar los timestamps created_at y updated_at, puedes establecer esto en false
    public $timestamps = true;
    public function Solicitud()
    {
        return $this->belongsTo(Solicitud::class, 'ID_estado', 'ID_estado');
    }
}
