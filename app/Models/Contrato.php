<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    use HasFactory;
    protected $table = 'contratos'; // Nombre de la tabla en la base de datos

    protected $primaryKey = 'ID_contrato'; // Nombre de la clave primaria

    /**
     * Los atributos que son asignables.
     *
     * @var array
     */
    protected $fillable = [
        'Tipo_contrato',
        'Fecha_inicio',
        'Fecha_final',
        // Puedes agregar más campos aquí si es necesario
    ];
    public function Solicitante()
    {
      return $this->belongsTo(Solicitante::class, 'ID_solicitante', 'ID_solicitante');
    }
  
}
