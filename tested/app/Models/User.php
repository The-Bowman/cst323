<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User 
{
   // Properties
   public $id;
   public $email;
   public $username;
   public $password;
   
   public function __construct($username, $password){
       
        $this->username = $username;
        $this->password = $password;
   }
   
   public function getName(){
       return $this->username;
   }
   
   public function getEmail(){
       return $this->email;
   }
   
   public function getId(){
       return $this->id;
   }
   
   public function getPassword(){
       return $this->password;
   }
}
