<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bindings extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'description'];
    use HasFactory;
}
