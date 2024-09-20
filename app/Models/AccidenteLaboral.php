<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccidenteLaboral extends Model
{
    use HasFactory;

    protected $table = 'accidentes_laborales';
    protected $primaryKey = 'id_accidente';

    protected $fillable = [
        'id_empleado',
        'fecha_accidente',
        'descripcion',
        'causa',
    ];

    public function empleado()
    {
        return $this->belongsTo(Empleado::class, 'id_empleado', 'id_empleado');
    }
}
