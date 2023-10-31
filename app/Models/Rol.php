<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;
    protected $table = 'roles';
     // Nombre de la tabla en la base de datos
    protected $primaryKey = 'ID_rol'; // Nombre de la clave primaria
  /**
     * Los atributos que son asignables.
     *
     * @var array
     */
    protected $fillable = ['Nombre'];

    public function user()
    {
      return $this->belongsTo(User::class, 'ID_rol', 'ID_rol');
    }
  

}
