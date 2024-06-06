<?php

namespace App\Models;


class Endereco extends RModel
{
    protected $table = "enderecos";
    protected $fillable = ['cep', 'endereco', 'complemento', 'numero', 'cidade', 'estado'];
}
