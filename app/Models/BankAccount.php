<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class BankAccount extends Model
{
    use HasFactory;
    protected $table ='bank_accounts';
    protected $fillable = [ 'Description', 'OpenDate', 'Code', 'CardNumber', 'PIN','customer_id' ];

    public function customers()
    {
        return $this->belongsTo('App\Models\Customer');
    }

    
    public function transactions()
    {
        return $this->hasmany('App\Models\Transaction','BankAccount_id');
    }
}
