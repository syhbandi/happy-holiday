<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = ['name', 'price', 'description', 'image', 'includes', 'excludes'];
    protected $casts = [
        'includes' => 'array',
        'excludes' => 'array',
    ];
    public function sub_packages()
    {
        return $this->hasMany(SubPackage::class);
    }
}
