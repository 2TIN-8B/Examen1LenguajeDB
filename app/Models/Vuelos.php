<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vuelos extends Model
{
    protected $primaryKey = 'numeroVuelo';
    protected $table = 'vuelo';
    public $timestamps = false;
    use HasFactory;
}
