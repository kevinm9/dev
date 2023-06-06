<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formasdepago extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
    ];
    public function factura()
    {
        return $this->hasMany(Factura::class);
    }
}
