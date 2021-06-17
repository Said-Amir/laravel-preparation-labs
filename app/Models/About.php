<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $table = 'abouts';

    protected $fillable = [
        'title',
        'subtitle',
        'button'
    ];

    public function aboutFacts(){
        return $this->hasMany(AboutFact::class);
    }
}