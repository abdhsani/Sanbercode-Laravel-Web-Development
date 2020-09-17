<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table = 'pertanyaan';

    // Mass Assignment (fillable/guarded)
    protected $guarded = [];
}
