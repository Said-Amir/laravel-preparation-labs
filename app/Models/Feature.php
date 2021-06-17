<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    protected $table = 'features';

    protected $fillable = [
        "image",
        "title",
        "description",
        "text",
        "fact1",
        "fact2",
        "fact3"
    ];
}
