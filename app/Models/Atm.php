<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atm extends Model
{
    use HasFactory;
    protected $table = 'atms';
    protected $fillable = [
        'ATMCode',
        'Description',
        'Location',
        'Active',
        ];

}
