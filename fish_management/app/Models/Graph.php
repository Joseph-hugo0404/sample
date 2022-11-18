<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Graph extends Model
{
    use HasFactory;
    protected $table = 'monthly';
    protected $primaryKey = 'id';
    protected $fillable = ['transaction_month', 'transaction_year', 'tilapia', 'ornamental', 'carp', 'beetle_fish', 'cat_fish'];
}
