<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Book
 * @package App
 *
 * @property $name;
 * @property $author;
 * @property $description;
 * @property $year;
 * @property $pages_count;
 * @property $rating;
 * @property $is_in_stock;
 */
class Book extends Model
{
    protected $fillable = [
        'name', 'author', 'description', 'year', 'pages_count', 'is_in_stock', 'rating'
    ];
}
