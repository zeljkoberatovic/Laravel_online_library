<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Genres extends Model
{
    use SoftDeletes;
    protected $fillable = ['name', 'description'];
    use HasFactory;

   
    public function books()
    {
        return $this->belongsToMany(Book::class);
    }
}
