<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = ['name','email']; //para seguridad del formulario y no agregen otro campo

    //para no escribir todos los campos
    //protected $guarded = ['status'];//ignoramos los campos protegidos y colocar los campos permitidos
    protected $guarded = [];//si no tenemos un campo protegido lo dejamos vacio

    public function getRouteKeyName()
    {
        //return $this->getKeyName();
        return 'slug';
    }
}
