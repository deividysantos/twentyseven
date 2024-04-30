<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Icon extends Model
{
    use HasFactory;

    protected $table = 'icons';

    protected $fillable = [
        'name',
        'link'
    ];

    public function categories()
    {
        return $this->hasMany(Category::class, 'id_icon');
    }
}
