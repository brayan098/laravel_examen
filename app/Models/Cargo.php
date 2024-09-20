<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;

    // Tabla asociada
    protected $table = 'cargos';

    // Campos que se permiten para asignación masiva
    protected $fillable = [
        'id_empleado',
        'nombre_cargo',
        'fecha_asignacion',
        
    ];

    // Relación con el modelo Empleado
    public function empleado()
    {
        return $this->belongsTo(Empleado::class, 'id_empleado');
    }
}
