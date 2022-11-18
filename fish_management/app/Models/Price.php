<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'price';
    protected $primaryKey = 'id';
    protected $fillable = ['tilapia', 'ornamental', 'carp', 'beetle_fish', 'cat_fish'];
}
