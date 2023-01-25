<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class RadGroupCheck extends Model
{
    use HasFactory;
    protected $table = "radgroupcheck";
    protected $guarded = ['id'];
    public $timestamps = false;
}
