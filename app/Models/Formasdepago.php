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

    protected $casts = [
        'created_at' => 'date:Y-m-d H:i:s',
        'updated_at' => 'date:Y-m-d H:i:s',
    ];
    public function factura()
    {
        return $this->hasMany(Factura::class);
    }
}
