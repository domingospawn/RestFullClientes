<?php

namespace App\Repositories;

use App\Repositories\RepositoryInterface;
use App\Cliente;

class ClienteRepository implements RepositoryInterface
{
  /**
  * model
  *@var Cliente
  */
  private $model;

  public function __construct(Cliente $cliente)
  {
    $this->model = $cliente;
  }

  public function all()
  {
    return $this->model::all();
  }
}
