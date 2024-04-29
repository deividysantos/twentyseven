<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditCard extends Model
{
    use HasFactory;

    protected $table = 'credit_cards';

    protected $fillable = [
        'name',
        'id_bank',
        'due_day',
    ];

    public function bank()
    {
        return $this->belongsTo(Bank::class, 'id_bank');
    }
}
