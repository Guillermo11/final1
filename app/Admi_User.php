<?php

namespace vume;

use Illuminate\Database\Eloquent\Model;

class Admi_User extends Model
{
    //

    protected $fillable = [
        'nombres','apellidos','direccion','telefono','usuario','Correo','password','Cargo',
    ];

}
