<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Twitter extends Model
{
    //
    protected $fillable = [
        'id', 'titulo', 'contenido', 'usuario_id'
    ];
    public function usuario()
    {

        return $this->belongsTo("App\User");
    }
}
