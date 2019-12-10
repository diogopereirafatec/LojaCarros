<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cargos extends Model
{
    protected $table = 'cargos';
    protected $fillable = ['nome_cargo'];
    protected $guarded = ['id', 'created_at', 'update_at'];
}
