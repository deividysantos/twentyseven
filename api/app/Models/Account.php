<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $table = 'accounts';

    protected $fillable = [
        'name',
        'id_bank',
        'initial_value'
    ];

    public function bank()
    {
        return $this->belongsTo(Bank::class, 'id_bank');
    }
}
