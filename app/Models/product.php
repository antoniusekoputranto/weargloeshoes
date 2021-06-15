<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $guarded = [];

    public function productcolourimages()
    {
        return $this->hasMany(productcolourimage::class);
    }

}
