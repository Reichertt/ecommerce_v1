<?php

namespace App\Models;


class Address extends RModel
{
    protected $table = "address";
    protected $fillable = ['cep', 'address', 'complement', 'number', 'city', 'state'];
}
