<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productentry extends Model
{
    use HasFactory;
     /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $table = "productentry";
    protected $fillable = [
        'pname',
        'category_name',
        'current_price',
        'description',
        'quantity',
        'photo1',
        'author',
        'isbn',
        'format',
        'languaue',
        'release-date',
        'publisher',
        'pages',
        'condition'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];

}
