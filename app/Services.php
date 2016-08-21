<?php

namespace SuperZapatos;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    public function DevuelveTiendas() {
      return self::all();
    }
}
