<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions';

    protected $fillable = [
        'name',
        'description',
        'value',
        'date',
        'id_account',
        'id_creditCard',
        'id_category'
    ];

    public function account()
    {
        return $this->belongsTo(Account::class, 'id_account');
    }

    public function creditCard()
    {
        return $this->belongsTo(CreditCard::class, 'id_creditCard');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category');
    }
}
