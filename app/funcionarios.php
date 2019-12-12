<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class funcionarios extends Model
{
    protected $table = 'funcionarios';
    protected $fillable = ['nome','ctps','cracha', 'cargos_id'];
    protected $guarded = ['id', 'created_at', 'update_at'];

    public function cargo()
    {
        return $this->belongsTo(cargos::class);
    }
}
