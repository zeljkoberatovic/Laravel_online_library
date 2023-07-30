<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Books extends Model
{
    use SoftDeletes;
  //  public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'year',
        'page_count',
        'isbn',
        'letter_id',
        'binding_id',
        'format_id',
        'language_id',
        'publisher_id',
                   
    ];
    protected $guarded = ['id'];

    public function authors()
    {
        return $this->belongsToMany(Authors::class, 'book_authors', 'book_id', 'author_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Categories::class, 'book_categories', 'book_id', 'categorie_id');
    }

    public function genres()
    {
        return $this->belongsToMany(Genres::class, 'book_genres', 'book_id', 'genre_id');
    }


    public function publisher()
    {
        return $this->belongsTo(Publishers::class);
    }

    public function letter()
    {
        return $this->belongsTo(Letters::class);
    }

    public function binding()
    {
        return $this->belongsTo(Bindings::class);
    }

    public function format()
    {
        return $this->belongsTo(Formats::class);
    }

    public function language()
    {
        return $this->belongsTo(Languages::class);
    }


}
