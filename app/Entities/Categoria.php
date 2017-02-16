<?php

namespace ifestas\Entities;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categoria';
    protected $primaryKey = 'id_categoria';
    protected $fillable = ['nome','status'];
    public $timestamps = false;


}