<?php

namespace SuperZapatos;

use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
  protected $table    = 'stores';
  protected $fillable = ['name', 'address'];
//  protected $hidden   = ['id'];
  public $timestamps  = false;
}
