<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Queue\SerializesModels;

class Offer extends Model
{
    protected $table = "offers";
    protected $fillable=['name','price','details','created_at','updated_at'];
    protected $hidden=['created_at','updated_at'];
    public $timestamps = false;
}
