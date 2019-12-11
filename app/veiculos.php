<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class veiculos extends Model
{
    protected $fillable = ['nome_veiculo','cor','valor','ano','km_rodado','marcas_id','modelos_id'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'veiculos';
/*
    public function marcas(){
        return $this->hasOne(Marcas::class);
    }
    public function modelos(){
        return $this->hasOne(Modelos::class);
    }
*/
}
