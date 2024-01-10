<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    
    // Member.php
protected $fillable = ['name', 'lname', 'email', 'password', 'rpass'];
protected $table ="members";

}
