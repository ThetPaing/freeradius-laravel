<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RadAcct extends Model
{
    use HasFactory;

    protected $primaryKey = 'radacctid';

    protected $table = "radacct";
    protected $guarded = ['id'];
    public $timestamps = false;
}
