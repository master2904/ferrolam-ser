<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Concurso;
use App\Models\Colegio;
use App\Models\Detalle;
use App\Models\Laboratorio;
use App\Models\Problema;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\User::factory(10)->create();
        DB::table('users')->delete();
		User::create(array(
			'rol' => 1,
			'nombre' => 'Joel',
			'apellido' => 'Gonzales Aguilar',
			'username' => 'master',
			'imagen'=>'20218513118.jpg',
			'password' => Hash::make('master123456')
		));
		User::create(array(
			'rol' => 1,
			'nombre' => 'Oscar',
			'apellido' => 'Choque Gonzales',
			'username' => 'oscar',
			'imagen'=>'20221115128.jpg',
			'password' => Hash::make('oscar123456')
		));
		Product::create(array(
			'nombre'=>'CALAMINA',
			'imagen'=>'123.jpg'
		));
		Product::create(array(
			'nombre'=>'CLAVO',
			'imagen'=>'123.jpg'
		));
		Product::create(array(
			'nombre'=>'ALAMBRE',
			'imagen'=>'123.jpg'
		));
		Product::create(array(
			'nombre'=>'VIGAS',
			'imagen'=>'123.jpg'
		));
		Detalle::create(array(
			'id_product'=>'1',
            'descripcion'=>'18',
            'cantidad'=>'200',
            'precio_compra'=>'15',
            'precio_venta'=>'18',
            'stock_minimo'=>'10',
		));
		Detalle::create(array(
			'id_product'=>'1',
            'descripcion'=>'12',
            'cantidad'=>'200',
            'precio_compra'=>'15',
            'precio_venta'=>'18',
            'stock_minimo'=>'10',
		));
		Detalle::create(array(
			'id_product'=>'1',
            'descripcion'=>'108',
            'cantidad'=>'200',
            'precio_compra'=>'15',
            'precio_venta'=>'18',
            'stock_minimo'=>'10',
		));
    }
}
