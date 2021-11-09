<?php

namespace App\Models;


use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Notifications\Notifiable;

use Laravel\Passport\HasApiTokens;

class Customer extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

       /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */

    protected $table = 'customers';

    protected $fillable = [
        'Name',
        'Surname',
        'BirthDate',
        ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
 
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'BirthDate' => 'datetime',
        'email_verified_at' => 'datetime',
    ];

    public function bankaccounts()
    {
        return $this->hasMany(BankAccount::class);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
