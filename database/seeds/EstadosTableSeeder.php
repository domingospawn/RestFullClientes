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
      $estados = array(
        array('Acre', 'AC', 1),
        array('Alagoas', 'AL', 1),
        array('Amazonas', 'AM', 1),
        array('Amapá', 'AP', 1),
        array('Bahia', 'BA', 1),
        array('Ceará', 'CE', 1),
        array('Distrito Federal', 'DF', 1),
        array('Espírito Santo', 'ES', 1),
        array('Goiás', 'GO', 1),
        array('Maranhão', 'MA', 1),
        array('Minas Gerais', 'MG', 1),
        array('Mato Grosso do Sul', 'MS', 1),
        array('Mato Grosso', 'MT', 1),
        array('Pará', 'PA', 1),
        array('Paraíba', 'PB', 1),
        array('Pernambuco', 'PE', 1),
        array('Piauí', 'PI', 1),
        array('Paraná', 'PR', 1),
        array('Rio de Janeiro', 'RJ', 1),
        array('Rio Grande do Norte', 'RN', 1),
        array('Rondônia', 'RO', 1),
        array('Roraima', 'RR', 1),
        array('Rio Grande do Sul', 'RS', 1),
        array('Santa Catarina', 'SC', 1),
        array('Sergipe', 'SE', 1),
        array('São Paulo', 'SP', 1),
        array('Tocantins', 'TO', 1),
      );

      foreach($estados as $estado)
      {
        DB::table('estados')->insert([
            'nome'    => $estado[0],
            'uf'      => $estado[1],
            'pais_id' => $estado[2],
        ]);
      }

    }
}
