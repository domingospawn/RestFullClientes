<?php

use Illuminate\Database\Seeder;

class EstadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('estados')->insert([
          'nome'    => 'Acre',
          'uf'      => 'AC',
          'pais_id' => '1',
      ]);

      DB::table('estados')->insert([
          'nome'    => 'Alagoas',
          'uf'      => 'AL',
          'pais_id' => '1',
      ]);

      DB::table('estados')->insert([
          'nome'    => 'Amazonas',
          'uf'      => 'AM',
          'pais_id' => '1',
      ]);

      DB::table('estados')->insert([
          'nome'    => 'Amapá',
          'uf'      => 'AP',
          'pais_id' => '1',
      ]);

      DB::table('estados')->insert([
          'nome'    => 'Bahia',
          'uf'      => 'BA',
          'pais_id' => '1',
      ]);

      DB::table('estados')->insert([
          'nome'    => 'Ceará',
          'uf'      => 'CE',
          'pais_id' => '1',
      ]);

      DB::table('estados')->insert([
          'nome'    => 'Distrito Federal',
          'uf'      => 'DF',
          'pais_id' => '1',
      ]);

      DB::table('estados')->insert([
          'nome'    => 'Espírito Santo',
          'uf'      => 'ES',
          'pais_id' => '1',
      ]);
      DB::table('estados')->insert([
          'nome'    => 'Distrito Federal',
          'uf'      => 'DF',
          'pais_id' => '1',
      ]);
      DB::table('estados')->insert([
          'nome'    => 'Distrito Federal',
          'uf'      => 'DF',
          'pais_id' => '1',
      ]);
      DB::table('estados')->insert([
          'nome'    => 'Distrito Federal',
          'uf'      => 'DF',
          'pais_id' => '1',
      ]);
      DB::table('estados')->insert([
          'nome'    => 'Distrito Federal',
          'uf'      => 'DF',
          'pais_id' => '1',
      ]);
      DB::table('estados')->insert([
          'nome'    => 'Distrito Federal',
          'uf'      => 'DF',
          'pais_id' => '1',
      ]);
      DB::table('estados')->insert([
          'nome'    => 'Distrito Federal',
          'uf'      => 'DF',
          'pais_id' => '1',
      ]);
      DB::table('estados')->insert([
          'nome'    => 'Distrito Federal',
          'uf'      => 'DF',
          'pais_id' => '1',
      ]);
      DB::table('estados')->insert([
          'nome'    => 'Distrito Federal',
          'uf'      => 'DF',
          'pais_id' => '1',
      ]);
    }
}
