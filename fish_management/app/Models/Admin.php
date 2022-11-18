<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'address', 'contact_number', 'image', 
                           'email', 'email_verified_at', 'password',
                           'remember_token', 'created_at', 'updated_at',
                           'type'];
}
