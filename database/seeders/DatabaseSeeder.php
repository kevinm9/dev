<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Categoria;
use App\Models\Factura;
use App\Models\Formasdepago;
use App\Models\Producto;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Categoria
        Categoria::factory()->create([
            'id' => 1,
            'nombre' => 'Televisores'
        ]);
        Categoria::factory()->create([
            'id' => 2,
            'nombre' => 'Celulares y tablets'
        ]);
        Categoria::factory()->create([
            'id' => 3,
            'nombre' => 'Audífonos'
        ]);
        Categoria::factory()->count(40)->create();

        // Formas de pago
        Formasdepago::factory()->create([
            'id' => 1,
            'nombre' => 'Tarjeta de credito'
        ]);
        Formasdepago::factory()->create([
            'id' => 2,
            'nombre' => 'Tarjeta de debito'
        ]);
        Formasdepago::factory()->create([
            'id' => 3,
            'nombre' => 'Contado'
        ]);
        Formasdepago::factory()->create([
            'id' => 4,
            'nombre' => 'Cheque'
        ]);
        Formasdepago::factory()->count(40)->create();

        // User
        // password = password
        User::factory()->create([
            'id' => 1,
            'password' => '$2y$10$JQdMBzrZ1RTsks0dT3vLN.xZ9F9uqTdwgWrDeganPXCerTjwoWsym',
            'name' => 'kevin mosquera coronel',
            'email' => 'kevin@kevin.com',
        ]);
        User::factory()->create([
            'id' => 2,
            'name' => 'adminkevin',
            'email' => 'kevin@gmail.com',
        ]);
        User::factory()->create([
            'id' => 3,
            'name' => 'clientejoffre',
            'email' => 'joffre@gmail.com',
        ]);

        User::factory(10)->create();

        // Producto
        Producto::factory()->create([
            'id' => 1,
            'nombre' => 'Televisor Led 55 Smart Google Tv 4k Riviera', 
            'categoria_id' => 1
        ]);
        Producto::factory()->create([
            'id' => 2,
            'nombre' => 'TELEVISOR 32 ANDROID 11 HD INDURAMA ', 
            'categoria_id' => 1
        ]);

        Producto::factory()->create([
            'id' => 3,
            'nombre' => 'Celular Iphone 11 4gb', 
            'categoria_id' => 2
        ]);
        Producto::factory()->create([
            'id' => 4,
            'nombre' => 'Celular Spark 10 Pro 8gb', 
            'categoria_id' => 2
        ]);

        Producto::factory()->create([
            'id' => 5,
            'nombre' => 'Auriculares Inalambricos Tws Xe27 Azul Infinix', 
            'categoria_id' => 3
        ]);
        Producto::factory()->create([
            'id' => 6,
            'nombre' => 'Auriculares Inalambricos Plateado Hoco W35', 
            'categoria_id' => 3
        ]);

        Producto::factory(30)->create();

        // facturas

        Factura::factory(10)->create();

    }
}
