<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;

    protected $table = 'banks';
    protected $fillable = [
        'name',
        'id_icon'
    ];

    public function account()
    {
        return $this->hasMany(Account::class, 'id_bank');
    }

    public function creditCards()
    {
        return $this->hasMany(CreditCard::class, 'id_bank');
    }

    public function icon()
    {
        return $this->belongsTo(Icon::class, 'id_icon');
    }
}
