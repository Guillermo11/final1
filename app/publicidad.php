<?php

namespace vume;

use Illuminate\Database\Eloquent\Model;

class publicidad extends Model
{
  protected $table='publicidad';//

  protected $fillable = [
      'avatar', 'titulo', 'informacion','fechapublic','fechafinal',
  ];




}
