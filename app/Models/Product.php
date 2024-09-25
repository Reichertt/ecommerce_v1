<?php

namespace App\Models;

class Product extends RModel
{
    protected $table = "product";
    protected $fillable = ['name', 'photo', 'descripition', 'category_id', 'value'];
}
