<?php
namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Signupuser extends Authenticatable
{
    use Notifiable;

    protected $table = 'signupuser';
    protected $fillable = ['username', 'password'];
    protected $hidden = ['password'];

    public function getAuthIdentifierName(){
        return 'username';
    }
}


// <?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Signupuser extends Model
// {
//     use HasFactory;
//     public $table = "signupuser";

//     protected $fill = [
//         'username', 'password'
//     ];
// }
