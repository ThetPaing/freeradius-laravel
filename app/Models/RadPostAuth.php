<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RadPostAuth extends Model
{
    use HasFactory;
    protected $table = "radpostauth";
    protected $guarded = [];
    public $timestamps = false;
}
