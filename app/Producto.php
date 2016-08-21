<?php

namespace SuperZapatos;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
  protected $table    = 'articles';
  protected $fillable = ['name', 'description', 'price', 'total_in_shelf', 'total_in_vault', 'store_id'];
  //protected $hidden   = ['id'];
  public $timestamps  = false;
}
