<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelos extends Model
{
    protected $fillable = ['nome_modelo','qtde_portas'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'modelos';
}
