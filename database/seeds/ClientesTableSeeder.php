<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      for ($i = 1; $i <= 1000; $i++)
      {
        DB::table('clientes')->insert([
          'nome'     => 'nome: '.str_random(10),
          'fantasia' => str_random(10),
          'forma_de_visita'     => str_random(10),
          'plano'     => str_random(10),
          'valor_base'     => 1000,
          'comissao'     => 5,
          'situacao'     => str_random(10),
          'tipo_cliente'     => str_random(10),
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
      }
    }
}
