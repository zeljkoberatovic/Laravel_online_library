<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Letters extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'description'];

    use HasFactory;
}
