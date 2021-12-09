<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    public $timestamps = true;
    protected $guarded = [];
    use HasFactory;
}
