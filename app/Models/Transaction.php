<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{//model
    use HasFactory;
    protected $table = 'transactions';
    protected $fillable = [
        'Description',
        'TransactionDate',
        'Amount',
        'InOut',
        'Code',
        'BankAccount_id',
        'Atm_id',
        'Currency_id'
        ];

    protected $casts = [
            'TransactionDate' => 'datetime',
        ];
    
    public function currency()
    {
        return $this->hasOne(Curency::class);
    }

    public function atm()
    {
        return $this->hasOne(Atm::class);
    }

    public function bankaccount()
    {
        return $this->hasOne(BankAccount::class);
    }

}
