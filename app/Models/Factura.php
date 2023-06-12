<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;

    //protected $dates = ['created_at'];

    protected $casts = [
        'created_at' => 'date:Y-m-d H:i:s',
        'updated_at' => 'date:Y-m-d H:i:s',
    ];

    protected $fillable = [
        'formasdepago_id',
        'cliente_id',
        'total',
    ];

    public function formasdepago()
    {
        return $this->belongsTo(Formasdepago::class);
    }

    public function cliente()
    {
        return $this->belongsTo(User::class, 'cliente_id', 'id');
    }

    // public function productos()
    // {
    //     return $this->belongsToMany(Productoo::class,'facturas_productos', 'factura_id', 'producto_id')->withPivot('cantidad');
    // }

    public function productos()
    {
        return $this->belongsToMany(Producto::class)->withPivot('cantidad');
    }
}
