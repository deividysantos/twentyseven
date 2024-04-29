<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'name',
        'id_icon',
        'description',
        'type'
    ];

    public function icon()
    {
        return $this->belongsTo(Icon::class, 'id_icon');
    }
}
