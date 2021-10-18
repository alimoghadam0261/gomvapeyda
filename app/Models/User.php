<?php

namespace App\Models;

use App\Http\Controllers\FormadsController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Shetabit\Visitor\Traits\Visitor;
use Illuminate\Contracts\Auth\CanResetPassword;


class User extends Authenticatable
{
    use HasFactory, Notifiable;


    protected $fillable = [
        'name',
        'is_admin',
        'email',
      'phone_number',
        'password',
        'last_login_at'

    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isAdmin()
    {
        return $this->is_admin;
    }



    public function formads()
    {

        return $this->hasMany(Formads::class);
  }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }




}

