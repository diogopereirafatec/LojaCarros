<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class funcionarios extends Model
{
    protected $fillable = ['nome','ctps','cracha'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'funcionarios';
}
