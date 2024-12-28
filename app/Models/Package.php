<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = ['name', 'price', 'description', 'image'];

    public function sub_package()
    {
        return $this->hasMany(SubPackage::class);
    }
}
