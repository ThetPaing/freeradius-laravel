<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RadCheck extends Model
{
    use HasFactory;
    protected $table = "radcheck";
    protected $guarded = [];
    public $timestamps = false;
}
