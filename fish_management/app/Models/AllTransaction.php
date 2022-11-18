<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllTransaction extends Model
{
    use HasFactory;
    //public $timestamps = false;
    protected $table = 'all_transaction';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'address', 'contact_number', 'transaction_date', 
                           'tilapia', 'total_price_tilapia', 'ornamental', 'total_price_ornamental', 
                           'carp', 'total_price_carp', 'beetle_fish', 'total_price_beetle_fish', 
                           'cat_fish', 'total_price_cat_fish', 'type'];
}
