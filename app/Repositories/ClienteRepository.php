<?php

namespace App\Repositories;

use App\Cliente;

class ClienteRepository
{

  public funtion all()
  {
    $clientes = Cliente::all();
    return $clientes;
  }
}
