<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    use HasFactory;

    // Campos que son asignables en masa
    protected $fillable = [
        'id_empleado',
        'fecha_inicio',
        'fecha_fin',
        'tipo_contrato',
        'salario'
    ];

    // Relación con el modelo Empleado
    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }
}
