<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'categoria_id',
        'nombre',
        'precio',
        'stock',
        'imagen'
    ];
    protected $casts = [
        'created_at' => 'date:Y-m-d H:i:s',
        'updated_at' => 'date:Y-m-d H:i:s',
    ];

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    public function facturas()
    {
        return $this->belongsToMany(Factura::class);
    }
}
