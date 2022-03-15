<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sounds extends Model
{
    use HasFactory;

    protected $fillable = [
        'idUserSonidos',
        'titlesound',
        'descriptionsound',
        'category1sound',
        'category2sound',
        'category3sound',
        'linksound',
        'totalreproductionsound'
    ];
}
