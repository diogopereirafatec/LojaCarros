<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class marcas extends Model
{
    protected $table = 'marcas';
    protected $fillable = ['nome_marca'];
    protected $guarded = ['id', 'created_at', 'update_at'];
}
