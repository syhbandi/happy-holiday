<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubPackage extends Model
{
    protected $fillable = ['name', 'price', 'description', 'image'];

    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
